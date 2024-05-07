<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antonio Márquez</title>
    <style>
body{
    padding: 0;
    margin: 0;
}
.bisiesto{
    width: 5%;
    background-color: rgb(185, 254, 231);
    float: left;
    text-align: center;
    color: rgb(115, 0, 255);
}
.secular{
    width: 5%;
    background-color: rgb(251, 254, 185);
    float: left;
    text-align: center;
    color: rgb(0, 0, 0);
}
</style>
</head>
<body>
    <?php

    function compruebaBisiesto($year){
        if(($year % 4 == 0 && $year % 100 != 0)||($year%400 == 0)){
            return true;
        }else{
            return false;
        }
    }

    for ($year=1;$year<=3000;$year++){

        $esBisiesto = compruebaBisiesto($year);

    if($esBisiesto){
        echo "<div class=bisiesto>";
                echo $year;
    } else{
        echo "<div class=secular>";
            echo $year;
    }
    echo "</div>";
    
    }
     
    ?>
</body>
</html>