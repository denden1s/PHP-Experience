<!DOCTYPE html>
<html lang="ru">
    <head>
    <? include 'Functions.php'?>
        <meta charset="utf-8" name="Nikitin D.A." content="">
        <title>Nikitin Denis</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <header><? ViewHeader("Главная страница"); ?></header>
    <div align = center>
    <h2><a href="Search.php">Перейти на страницу поиска</a></h2><br>
      <? ViewProductInfo();?>
    </div>
    <footer><? ViewFooter("Главная страница");?></footer>
    </body>
</html>