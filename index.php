<?php
	
	if($_GET['m']=="send"){
                    $_POST['phone']
                    $_POST['cost']
                    $_POST['article']
                    $_POST['equipment']


		$ch = curl_init("https://sms.ru/sms/send");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
		    "api_id" => "fa5cbf1c-3a4a-f2a4-3122-365973dd3b2c",
		    "to" => "79164401342", // До 100 штук до раз
		    "msg" => "Заявка! Артикул:".$_POST['article']." Комплектация: ".$_POST['equipment']." Стоимость: ".$_POST['cost']." Клиент: ".$_POST['phone'], // Если приходят крякозябры, то уберите iconv и оставьте только "Привет!",
		    /*
		    // Если вы хотите отправлять разные тексты на разные номера, воспользуйтесь этим кодом. В этом случае to и msg нужно убрать.
		    "multi" => array( // до 100 штук за раз
		        "79164401342"=> iconv("windows-1251", "utf-8", "Привет 1"), // Если приходят крякозябры, то уберите iconv и оставьте только "Привет!",
		        "74993221627"=> iconv("windows-1251", "utf-8", "Привет 2") 
		    ),
		    */
		    "json" => 1 // Для получения более развернутого ответа от сервера
		)));
		$body = curl_exec($ch);
		curl_close($ch);


        $response = [];
        $response['response']['success'] = true; 
        echo json_encode($response); 		
		die();
	}



	$httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
	$httpReferer = "http://brusvyanka.ru/proekty-domov/tayga/";	

	$httpReferer = $_GET['referer'];

	$alias = end(array_filter(explode("/", parse_url($httpReferer, PHP_URL_PATH))));	

	if(empty($alias)) die("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");


	$db = new SQLite3(realpath('db.db'));
	include("template.class.php");	
	$submit = new Template("submit.tpl");


	$results = $db->query("
		SELECT 
		c.price,
		cg.parent,
		cg.title
		FROM
		catalog as c
		INNER JOIN products as p ON c.id_product = p.id
		INNER JOIN categories as cg ON c.id_category = cg.id
		WHERE
		p.alias = '".$alias."'
	");
	$data = [];
	while ($row = $results->fetchArray()) {
		if (!isset($data[$row['parent']])) $data[$row['parent']] = [];
	    array_push($data[$row['parent']], array('title' => $row['title'], 'price' => $row['price']));
	}

	$submit->set("foundation-list", implode("", array_map(function($o){return (string)'<option value="'.$o['price'].'">'.$o['title'].'</option>';}, $data[1])));
	$submit->set("walls-list", implode("", array_map(function($o){return (string)'<option value="'.$o['price'].'">'.$o['title'].'</option>';}, $data[4])));
	$submit->set("floors-list", implode("", array_map(function($o){return (string)'<option value="'.$o['price'].'">'.$o['title'].'</option>';}, $data[8])));
	$submit->set("roof-list", implode("", array_map(function($o){return (string)'<option value="'.$o['price'].'">'.$o['title'].'</option>';}, $data[9])));

	//print("<pre>".print_r($data,true)."</pre>");
	unset($results);
	unset($row);

	$results = $db->query("
		SELECT
		s.article,
		s.title, 
		s.area, 
		s.rooms, 
		s.floors, 
		s.thumbnail,
		SUM(s.price) as cost
		FROM (
			SELECT 
			p.id,
			p.title, 
			p.area, 
			p.rooms, 
			p.floors, 
			p.thumbnail,
			p.article,
			MIN(c.price) as price,
			cg.parent
			FROM
			catalog as c
			INNER JOIN products as p ON c.id_product = p.id
			INNER JOIN categories as cg ON c.id_category = cg.id
			WHERE
			p.alias = '".$alias."'
			GROUP BY cg.parent
		) AS s
		GROUP BY s.id
	");
	$rows = $results->fetchArray();
	





	$submit->set("article", $rows['article']);
	$submit->set("area", $rows['area']);
	$submit->set("rooms", $rows['rooms']);
	$submit->set("floors", $rows['floors']);
	$submit->set("title", $rows['title']);
	$cost = number_format($rows['cost'], 2, ',', ' ');
	$cost = substr($cost, 0, strpos($cost, ","));
	$submit->set("thumbnail", $rows['thumbnail']);
	$submit->set("cost", $cost);
	echo $submit->output();





	/*while ($row = $results->fetchArray()) {
			var_dump($row);
	}*/	
?>