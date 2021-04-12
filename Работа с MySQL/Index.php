<?php
    session_start();

    $login = "root";
    $password = "root";
    if(isset($_POST['userName']) && isset($_POST['password'])){
        $userName = $_POST['userName'];
        $userPassword = $_POST['password'];
        if(($userName == $login) &&($userPassword == $password)){
            $_SESSION['userName'] = $userName;
            $_SESSION['password'] = $userPassword;
            header("Location: /AdminPanel.php");
            exit;
        }
        else{
            echo "<script>alert('Логин или пароль не соответствуют')</script>";
        }

    }
    else{
        session_destroy();
    }

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" name="Гайдуков" content="Lab 32">
        <title>Гайдуков</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method = "POST">
        <div class="Title">
            <div class="FormElements" align = center>
                <p align="justify">
                Введите логин:
                <input type="text" name = "userName" size="8"> 
                Введите пароль:
                <input type="password" name = "password" size="8">
                <input type="submit" value="Войти">                
                </p>
            </div>
        </div>
        </form>
        <form action = "Viewinfo.php" method="GET">
        <div style="position: absolute; left: 55%; top: 85%;">
        <?
             $connection = mysqli_connect("Gaidukov32","root","root","flims");
             if($connection){
                 $sqlRequest = "Select * From users";
                 $result = mysqli_query($connection, $sqlRequest); 
                 while($row = mysqli_fetch_array($result)) {           
                     $sql2 = "Select * From roles Where Role_ID = " . $row["Role_ID"];
                     $result2 = mysqli_query($connection, $sql2);
                     $Role = mysqli_fetch_array($result2);
                    if(strlen($row["Login"]) > 250)
                    $row["Login"] = substr($row["Login"], 0, 250) ."...";
                    echo("
                    Логин пользователя: ". $row["Login"] ."<br>
                    Пароль: ". $row["Password"] ."<br>
                    Роль пользователя: ". $Role["Name"] ."<br>
                    <a href = 'Viewinfo.php?id=". $row["User_ID"] ."'>Читать далее</a><br><br>
                    ");
                }
             }
         
        ?>
        </div>
        </form>
    </body>
</html>