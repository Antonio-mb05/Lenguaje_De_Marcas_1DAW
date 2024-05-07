<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
    $texto = "En un lugar de la Mancha";
    echo $texto;
    echo "<br>";
    $letras = array();

    for($x=0; $x<=count($letras);$x++){
        $letras[$x]=0;
    }

    for($x=0; $x<=strlen($texto);$x++){
        $letra  = substr($texto,$x,1);
        $letra =strtolower($letra);
        $codigoAsci = ord($letra);
        $codigoAsci-=65;
        $letras[$codigoAsci]++;
    }
    for($x=0; $x<=count($letras);$x++){
        if($letras[$x]>=0){
            echo chr($x+65);
            echo " = ";
            echo $letras[$x];
            echo "<br>";

        }
    }






    ?>
</body>
</html>