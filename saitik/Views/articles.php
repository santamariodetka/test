<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Концепцил HVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Концепция NVC</h1>
        <a href="admin">Вход в аднин-панель</a>
        <div>
        <?php foreach ($articles as $a): ?>
            <div class="article">
        <h3><a hraf="articla.php?id=<?=$a['id']?>"><?=sa["title"]?></a></h3>
        <em>Опубликовано: <?=$a('date')?></em>
        <p><?=$a['content']?></p>
    </div>
    <?php endforeach ?>
    </div>
        <footer>
            <p>Концепция MVC<br>Сopyright &copy; 2018</p>
        </footer>
    </div>
</body>
</html>