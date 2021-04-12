<?
function ViewHeader($name){
echo(
  "<h1>Заголовок страницы: $name</h1>"
);
}
function ViewFooter($name){
  echo(
    "<h2>Подвал страницы: $name</h2>"
  );
}


function ViewProductInfo(){
  $host = "Internet.test";
$user = "root";
$password = "root";
$dbName = "products";

$link = mysqli_connect($host, $user, $password, $dbName) 
    or die("Ошибка " . mysqli_error($link));
  if($link){
    $sqlFindMax = "SELECT MAX(Product_ID) From baseinfo";
    $result = mysqli_query($link, $sqlFindMax);
    $maxID = mysqli_fetch_array($result);
    $sqlFindMin = "SELECT Min(Product_ID) From baseinfo";
    $result1 = mysqli_query($link, $sqlFindMin);
    $minID = mysqli_fetch_array($result1);
    for($i = $minID[0] ; $i <= $maxID[0]; $i++){
      $sqlInfo = "SELECT * FROM BaseInfo Where Product_ID = $i";
      $result2 = mysqli_query($link, $sqlInfo);
      $info = mysqli_fetch_array($result2, MYSQLI_ASSOC);
      $productInfo = $info['Content'];
      $productName = $info['Name'];
      echo("
      <div class = 'content'><h2>Товар $i</h2>
      <p> Наименование: $productName<br>
      Описание: $productInfo
      </p></div>
      ");
    }
  }
}
function ViewFindResult(){
  if(isset($_POST['findText'])){
    $host = "Internet.test";
    $user = "root";
    $password = "root";
    $dbName = "products";
    
    $link = mysqli_connect($host, $user, $password, $dbName) 
        or die("Ошибка " . mysqli_error($link));
      if($link){
        $rs = mysqli_query($link, "Select * From BaseInfo 
        where name LIKE '%". $_POST['findText'] ."%' OR content LIKE '%". $_POST['findText'] ."%'");
        while ($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)){
          $productInfo = $row['Content'];
          $productName = $row['Name'];
          echo("
          <div class = 'content'><h2>Товар $i</h2>
          <p> Наименование: $productName<br>
          Описание: $productInfo
          </p></div>");
        }
      }
  }
  else if ($_POST['findText'] = "") {
    ViewProductInfo();
  }
}
?>