<?php

	$httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
	$httpReferer = "http://brusvyanka.ru/proekty-domov/tayga/";	

	$httpReferer = $_GET['referer'];

	$alias = end(array_filter(explode("/", parse_url($httpReferer, PHP_URL_PATH))));	

	if(empty($alias)) die("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");


	$db = new SQLite3(realpath('db.db'));
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
	
	include("template.class.php");	
	$submit = new Template("submit.tpl");
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