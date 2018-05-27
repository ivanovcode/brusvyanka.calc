<?php
	$httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
	$httpReferer = "http://brusvyanka.ru/proekty-domov/tayga/";	
	echo $_GET['referer'];
	die();
	$httpReferer = $_GET['referer'];

	$alias = end(array_filter(explode("/", parse_url($httpReferer, PHP_URL_PATH))));	

	if(empty($alias)) die("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");

	$db = new SQLite3('db.db');

	$results = $db->query("SELECT products.article, products.area, products.rooms, products.floors FROM products WHERE products.alias = '".$alias."'");
	$rows = $results->fetchArray();

	include("template.class.php");	
	$submit = new Template("submit.tpl");
	$submit->set("article", $rows['article']);
	$submit->set("area", $rows['area']);
	$submit->set("rooms", $rows['rooms']);
	$submit->set("floors", $rows['floors']);
	echo $submit->output();

	/*while ($row = $results->fetchArray()) {
			var_dump($row);
	}*/	
?>