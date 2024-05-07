<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $texto="abcd";
    echo $texto;
    echo "<br>";
    $frase=strtolower(str_replace(' ','',($texto)));
    echo $frase;
    $longitud = strlen($frase)-1;
    $fraseAlReves='';
    echo "<br>";

    for($x = $longitud;$x >= 0;$x--){
        $fraseAlReves .= $frase[$x];
    }
    echo $fraseAlReves;
    echo "<br>";

    if($frase == $fraseAlReves){
        echo "La frase es Palíndroma";
    }
    else{
        echo "La frase NO es Palíndroma";
    }

    ?>
</body>
</html>