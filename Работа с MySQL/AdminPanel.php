<?php
        session_start();
        if (! isset($_SESSION['userName'],$_SESSION['password'])){

            header("Location: /");
            exit;
        }
    ?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Главная страница сайта</title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/null.css">
    </head>

    <body>
        <form method="post" action="Index.php">
        <menu class="container background">
      <div>
         <a class="menu_lnk" href="TempPage.php">1. Фильмы</a>
     </div>
     <div>
         <a class="menu_lnk" href="TempPage.php">2.Пользователи</a>
     </div>
     <div>
         <a class="menu_lnk" href="TempPage.php">3. Бронирование</a>
     </div>
     <div>
        <a class="menu_lnk" href="TempPage.php">4. Роли</a>
    </div>
    <div>
        <a class="menu_lnk" href="TempPage.php">5. Страна</a>
    </div>
        <div>
        <a class="menu_lnk" href="TempPage.php">6. Режиисёры</a>
    </div>
    <div>
        <a class="menu_lnk" href="TempPage.php">7. Жанры фильмов</a>
     </div>
     </div>
     </div>
     </div>
  </menu>
            <div class="exit">
                <input type="submit" name="Go to Start page" value="Выйти">
            </div>
        </form>

    </body>
</html>