<?php

require_once("D:\OpenServer\domains\localhost\mvcblog21\database.php"); 
require_once("D:\OpenServer\domains\localhost\mvcblog21\models\articles.php");

$link = db_connect();

if (isset($_GET['action'])) {
	$action = $_GET['action'];
} else{
	$action = "";
}

if ($action == "add") {
	if(!empty($_POST)) {
		articles_new($link, $_POST['title'], $_POST['data'], $_POST['content']);
		header("Location: index.php");
	}
	include("D:\OpenServer\domains\localhost\mvcblog21\Views\article_admin.php");
} else if ($action =="edit") {
	if(!isset($_GET['id']))
		header("Location: index.php");
	$id = (int)$_GET['id'];

	if(!empty($_POST) && $id > 0) {
		articles_edit($link, $id, $_POST['title'], $_POST['data'], $_POST['content']);
		header("Location: index.php");
	}

	$article = articles_get ($link, $id);
	include("D:\OpenServer\domains\localhost\mvcblog21\Views\article_admin.php");
}
else {
	$articles = articles_all($link);
	include ("D:\OpenServer\domains\localhost\mvcblog21\Views\articles_admin.php");
}
?>