<!DOCTYPE html>
<html lang="ru">
    <head>
    <? include 'Functions.php';?>
        <meta charset="utf-8" name="Nikitin D.A." content="">
        <title>Nikitin Denis</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <header><? ViewHeader("Страница поиска"); ?></header>
    <div align = center>
    <h2><a href="Index.php">Перейти на главную страницу</a></h2><br>
      <form action="Search.php" method="Post">
      <input type="text" name = "findText">
      <input type="submit" value="Найти">
      </form>
      <? ViewFindResult(); ?>
    </div>
    <footer><? ViewFooter("Страница поиска");?></footer>
    </body>
</html>