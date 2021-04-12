
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" name="Nikitin D.A." content="Lab 27">
        <title>Nikitin Denis</title>
    </head>
    <?php 
    $pass = $_POST['password'];
    

    function FindSpecialWord($password){
        $specialWords = array('!','@','#', '$', '%', '^','&', '*', '(', ')',
        '"', '№', ';', ':', '?', '_'); 
        $containSpecialWord = false;
        for($i = 0; $i <  count($specialWords); $i++){
            if(strpos($password, $specialWords[$i])){
                $containSpecialWord = true;
                echo("Специальные символы присутствуют<br>");
                break;
            }
        }
        return $containSpecialWord;
    }

    function ResearchPassword($password){
        $strong = 0;
        $passwordLength = strlen($password);
        $countOfUpperCaseWord = 0;
		
		if($passwordLength >2 && $passwordLength <= 4) $strong++;
		if($passwordLength >4 && $passwordLength <= 6) $strong+=2;
		if($passwordLength >6 && $passwordLength <= 8) $strong+=3;
		if($passwordLength >8 && $passwordLength <= 10) $strong+=4;
		if($passwordLength >10) $strong+=5;

		$upString = strtoupper($password);
        echo("Введённый пароль: $password<br>");
        echo("Длина пароля: $passwordLength <br>");
        for($i = 0; $i < $passwordLength; $i++){
		    if($password[$i] == $upString[$i]){
                $countOfUpperCaseWord++;
            }
        }
        echo("Количество символов в верхнем регистре: $countOfUpperCaseWord<br>");
	    if($passwordLength / 2 <=  $countOfUpperCaseWord){
	        $countOfUpperCaseWord = 1;
	    }
        else if($countOfUpperCaseWord > 4){ $countOfUpperCaseWord = 4;}

        if(FindSpecialWord($password)){
            $strong++;
        }
        $strong+=$countOfUpperCaseWord;
		
		if(($strong == strrev($strong)) && (strlen($strong) > 1)){
			$strong--;
		}
        return $strong;
    }
	
    ?>
    <body>
        <form method = "post" action="Index.php">
            <p>
                Введите Пароль: 
                <input type="text" name = "password">
                <input type="submit" value="Рассчитать сложность">
            </p>
        </form>
        <?php
        $i = ResearchPassword($pass) ;
           echo("Cложность пароля: $i");
        ?>
    </body>
</html>