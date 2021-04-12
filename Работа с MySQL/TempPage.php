<?php
session_start();
if (isset($_SESSION['userName'],$_SESSION['password'])){

    if(isset($_POST['RoleName']) && isset($_POST['editInfo']) && isset($_POST['RoleID'])){
        $sql = "";
        switch($_POST['editInfo']){
            case 1:
                $sql = "Insert Into roles (Role_ID, Name) Values (".$_POST['RoleID'] . ", '". $_POST['RoleName'] ."');";
                break;
            case 2:
            $sql = "Update roles set Name = '". $_POST['RoleName'] ."' where Role_ID = ". $_POST['RoleID'] .";";
            break;
            case 3:
                $sql = "Delete from roles where Role_ID = ". $_POST['RoleID'] .";";
                break;
            default:
            break;
        }
        $connection = mysqli_connect("Gaidukov32","root","root","flims");
        $result = mysqli_query($connection, $sql)or die("Ошибка " . mysqli_error($connection)); 
        if($result)
            echo("Действие прошло успешно");
    }
            echo("
            <form action = 'TempPage.php' method = 'Post'>
            <p>
            <input type = 'radio' value = 1 name = 'editInfo'>Добавить<br>
            <input type ='radio' value = 2 name = 'editInfo'>Изменить<br>
            <input type = 'radio' value = 3 name = 'editInfo'>Удалить<br>
            Введите ID для измеенения <input type = 'text' name = RoleID><br>
            Введите название роли <input type = 'text' name = RoleName><br>
            <input type = 'submit' value = 'Отправить'>
            </p>
            </form>
            ");
        }
        else{

            header("Location: /");
            exit;
        }
?>

