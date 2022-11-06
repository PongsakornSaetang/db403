<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dices Roller</title>
</head>
<body>
    <?php
        function Dices_Roller($score = false) {
            $d1 = rand(1, 6); 
            $d2 = rand(1, 6); 
            $mid = $score ? "$d1 + $d2 => " : '';
            return '2 Dices Roll => '.$mid.'ผลรวมคือ '.($d1 + $d2); 
        }
        echo '<h1>wiht out score</h1>';
        echo Dices_Roller();
        echo '<h1>with score</h1>';
        echo Dices_Roller(TRUE);
    ?>
</body>
</html>