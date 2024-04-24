
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Концепция MVC</title>
	<link rel="stylesheet" href="D:\prosto\openserver\domains\saitik\style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Концепция MVC</h1>
		<a href="index.php?action=add">Добавить статью</a>
		<div>
			<table class="admin-table">
				<tr>
					<th>Дата</th><th>Заголовок</th><th></th><th></th>
				</tr>
			<?php foreach ($articles as $a): ?>
				<tr>
					<td><?=$a['date']?></td>
					<td><?=$a['title']?></td>
					<td><a 
					href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></td>
					<td><a 
					href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>
				</tr>
			<?php endforeach ?>
			</table>
		</div>
		<footer>
			<p>Концепция MVC<br>Copyright &copy; 2018</p>
		</footer>
	</div>
</body>
</html>
