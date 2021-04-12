<?
if(isset($_GET['id'])){
  $connection = mysqli_connect("Gaidukov32","root","root","flims");
    if($connection){
        $sqlRequest = "Select * From users where User_ID = ".$_GET['id'] ;
        $result = mysqli_query($connection, $sqlRequest); 
        $row = mysqli_fetch_array($result);         
        $sql2 = "Select * From roles Where Role_ID = " . $row["Role_ID"];
        $result2 = mysqli_query($connection, $sql2);
        $Role = mysqli_fetch_array($result2);        
        echo("<h1>Подробная информация</h1><br>
        Логин пользователя: ". $row["Login"] ."<br>
        Пароль: ". $row["Password"] ."<br>
        Роль пользователя: ". $Role["Name"] ."<br>
        <a href = 'Index.php'>Вернуться назад</a>
        ");
  }
}
?>