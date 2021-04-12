<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" name="Nikitin D.A." content="Lab 27">
        <title>Nikitin Denis</title>
    </head>
    <?php 
    function FindHipotenuse($tanA, $lengthOfLeg){
        $result = 0;
        $b = (double)$tanA * (double)$lengthOfLeg;
        $cathetus1 = pow((double)$lengthOfLeg,2);
        $cathetus2 = pow((double)$b,2);
        $result = sqrt($cathetus1 + $cathetus2);

        return $result;
    }
    function ViewResult(){
        $hipotenuse = 0;
        $hipotenuse = Round(FindHipotenuse((double)$_POST['tanA'],(double)$_POST['lengthOfLeg']),2);
        $output = "
        <html>
            <head>
            <title>Nikitin Denis</title>
            </head>
            <body>
                <h1>Гипотенуза треугольника равна $hipotenuse у.е.</h1>
                <p>Расчёты производились по формулам:<br>
                b = tan(a) * a <br>
                c = √(a^2 + b^2)
                </p>
            </body>
        </html>";

        echo($output);
    }
    ?>
    <body>
        <form method = "post" action="Index.php">
            <p>
                Введите значение тангенса: 
                <input type="text" name = "tanA">
                Введите длину катета А: 
                <input type="text" name = "lengthOfLeg">
                <input type="submit" value="Рассчитать">
            </p>
        </form>
        <?php
            ViewResult();
        ?>
    </body>
</html>
