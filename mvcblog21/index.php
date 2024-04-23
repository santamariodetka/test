<?php

require_once("D:\OpenServer\domains\localhost\mvcblog21\database.php"); 
require_once("models/articles.php");

$link = db_connect();
$articles = articles_all($link);

include ("views/articles.php");
?>