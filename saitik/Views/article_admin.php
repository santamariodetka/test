
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
			<div>
				<form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
					<label>
						Заголовок статьи:<br>
						<input type="text" name="title" value="<?=$article['title']?>" class="form-item"required>
					</label><br>
					<label>
						Дата:<br>
						<input type="date" name="date" value="<?=$article['date']?>" class="form-item"required>
					</label><br>
						<label>
						Текст статьи:<br>
						<textarea class="form-item" name="content"required><?=$article['content']?></textarea>
					</label><br>
						<label>
						<input type="submit" value="Сохранить" class="btn">
					</label>
				</form>
			</div>
			<footer>
				<p>Концепия MVC<br>Copyright &copy; 2018</p>
			</footer>
	</div>
</body>
</html>
