<?php
    $fSelectBox = $_GET['ConvertFrom'];
    $sSelectBox = $_GET['ConvertTo'];
    $fTextBox = $_GET['InputData'];
    $sTextBox = $_GET['Result'];
    $fontSize = (string)rand(4, 100)."px";
    $r = rand(0, 255);
    $g = rand(0, 255);
    $b = rand(0, 255);

    $r1 = rand(0, 255);
    $g1 = rand(0, 255);
    $b1 = rand(0, 255);
    $style = "background-color: rgb($r, $g, $b); font-size: $fontSize;
            color: rgb($r1, $g1, $b1);";
    $out = "
        <table>
        <tr>
            <th>Название элемента формы</th>
            <th>Содержимое элемента формы</th>
        <tr>
         <tr>
            <td>SelectBox</td>
            <td>$fSelectBox</td>
        <tr>
         <tr>
            <td>SelectBox</td>
            <td>$sSelectBox</td>
        <tr>
         <tr>
            <td>TextBox</td>
            <td>$fTextBox</td>
        <tr>
         <tr>
            <td>TextBox</td>
            <td>$sTextBox</td>
        <tr>
        </table>
    ";

    if(isset($_POST)){
        echo($out);
    }
    else{
        print("Error!");
    }
?>

<!Doctype html>
<html lang = "ru">
    <head>
        <link rel="stylesheet" href=" css/bootstrap.css">
        <link rel="stylesheet" href=" css/bootstrap-theme.css"> 
        <script src="JSCode.js"></script> 

        <meta name="Калькулятор" content="Калькулятор перевода единиц измерения" charset="utf-8">
        <title>Калькулятор Никитина Д.А.</title>
        <style>
            body{
                background-color: rgb
            }
        </style>
        <script>
            function loadPage(){
                ConvertTo.innerHTML = "<option value='0'>Выберите размерность</option>";
                ConvertTo.disabled = false;
                newElement = document.getElementById("Result");
                newElement.disabled = true;
            }
        </script>
    </head>
    <body onload="loadPage()" style="<?php echo($style);?>">
            <div class="container" style="width: 100%;"><p align = "center">Никитин Денис 4ПОИТ17</p></div> 
        <div class="row">
            <div class="col-lg-6 col-md-6 hidden-xs hidden-sm visible-md visible-lg">
                <p>
                   Форма калькулятора
                </p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 visible-xs visible-sm visible-md visible-lg">
                <form method="GET" action="Script.php">    
                    <p>
                        Конвертировать из  
                        <select name="ConvertFrom" id="ConvertFrom">
                            <option value="0">Выберите размерность</option>
                            <option value="1">ММ</option>
                            <option value="2">СМ</option>
                            <option value="3">М</option>
                        </select>
                        в 
                        <select name="ConvertTo" id="ConvertTo">  
                        </select>
                        значение:  
                        <input name="InputData" id="InputData" maxlength = "7" size = "1"> 
                        Результат: 
                        <input name="Result" id="Result" maxlength = "7" size = "1">
                    </p>
                    <input type="button" value="Рассчитать" onclick="CatchException()"> 
                    <input type="reset" value="Очистить элементы управления">
                    <input type="submit" value="Отправка данных в модуль" onclick="SetRandomStyle()">    
                    <script>
                        var myItems = [];
                        myItems[0] = ["СМ", "М", "КМ"];
                        myItems[1] = ["ММ", "М", "КМ"];
                        myItems[2] = ["ММ", "СМ", "КМ"];
                        ConvertFrom.onchange= function() {
                                myData = this.value-1;
                                if (myData != -1) {
                                    ConvertTo.innerHTML = "<option value='0'>Выберите размерность</option>";
                                    for (var i = 0; i < myItems[myData].length; i++) {
                                        ConvertTo.innerHTML += '<option value="' + (i + 1) + '">' + myItems[myData][i] + '</option>';
                                    }
                                }
                            }
                        function ConvertData(){
                            alert("Вызван метод конвертации");
                            newElement = document.getElementById("Result");
                            newElement.value = "Результат";
                        }   
                    </script>
                </form>
            </div>
            <div class="w-100"></div>
            <div class="col-lg-6 col-md-6 col hidden-xs hidden-sm visible-md visible-lg">
                <h1>Разработал страницу Никитин Денис</h1>
            </div>  
        </div>
    </body>
</html>