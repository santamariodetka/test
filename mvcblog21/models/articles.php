<?php

function articles_all($link) {
	$query = "SELECT * FROM articles ORDER BY id DESC"; 
	$result = mysqli_query($link, $query);

	if(!$result) die(mysqli_error($link));

	$n = mysqli_num_rows($result); 
	$articles = array();

	for ($i = 0; $i < $n; $i++) {
		$row = mysqli_fetch_assoc($result); 
		$articles[] = $row;
	}
	return $articles;
}
function articles_get($link, $id_article){
	$query = sprintf ("SELECT * FROM articles WHERE id=%d", (int)$id_arcticle);
	$result = mysqli_query($link, $query);

	if(!result) die (mysqli_error($link));

	$arcticle = mysqli_fetch_assoc($result);
	return $arcticle;
}
function articles_new($link, $title, $data, $content) {
	//Подготовка
	$title = trim($title);
	$content = trim($content);
	//Проверка
	if ($title == '')
		return false;
	//Запрос
	$t = "INSERT INTO articles (title, data, content) VALUES ('%s', '%s', '%s')";

	$query = sprintf($t, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $data), mysqli_real_escape_string($link, $content));

	//echo $query;
	$result = mysqli_query($link, $query);

	if (!$result)
		die(mysqli_error($link));
	return true;
}
function articles_edit($link, $id, $title, $data, $content){
	$title = trim($title);
	$content = trim($content);
	$data = trim($data);
	$id = (int)$id;

	if ($title == '')
		return false;

	$sql = "UPDATE articles SET title='%s', content='%s', data='%s' WHERE id='%d'";

	$query = sprintf($sql, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $content), mysqli_real_escape_string($link, $date), $id);

		$result = mysqli_query($link, $query);

		if (!$result)
			die(mysqli_error($link));

		return mysqli_affected_rows($link);
}
function articles_delete($id) {

}
?>