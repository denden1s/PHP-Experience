
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" name="Nikitin D.A." content="Lab 31">
        <title>Nikitin Denis</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <?php
    //Нужно для ограничения заполнения календаря по дням
    $months = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    ?>
    <body>
        <?php
        $date = date("F") ." ". date("o"). " года.";
        echo("
        <h1 align = center>$date</h1>
        ");
        ?>
        
        <table width = 600 border="2" rules = "All" align = center>
        <?php
        $dayNameEN = array("Mon", "Tue","Wed", "Thu", "Fri", "Sat", "Sun");
        //День месяца в числовом виде
        $today = date("j");
        //Номер месяца
        $thisMonthNum = date("n") - 1;
        //определение сегодняшнего дня в виде ПН
        $todayInStr= date("D");
        //определение первого дня месяца в виде Пн
        $firstMonthDay = "";
        for($i = 0; $i < count($dayNameEN); $i++){
           if($dayNameEN[$i] == $todayInStr) {
               $index = abs(($today % 7) - 1);
               echo($index." ");
               echo($i);
               $firstMonthDay = $dayNameEN[abs($i - $index)];
			   break;
           }
        }
        $day = 1;
        $startScore = false;
        for($i = 0; $i < 6; $i++){
            echo("<tr>");
            for($j = 0; $j < 7; $j++){
                //Заполнение первой строки календаря
                if($i == 0){
                    echo("<td align = center>$dayNameEN[$j]</td>");
                }
                else{
                    if($day <= $months[$thisMonthNum]){
                        //Проверка первого дня месяца
                        if($dayNameEN[$j] == $firstMonthDay){
                        $startScore = true;
                        }
                        //Начало заполнения календаря
                        if($startScore){
                            if($today == $day){
                                echo("<td align = center BGCOLOR= red>$day</td>");
                            }
                            else{
                                echo("<td align = center>$day</td>");
                            }
                            $day++;
                        }
                        else{
                         echo("<td align = center></td>");
                    }
                    }
                    else{
                         echo("<td align = center></td>");
                    }
                }
            }
            echo("</tr>");
        }
        ?>
        </table>
    </body>
</html>