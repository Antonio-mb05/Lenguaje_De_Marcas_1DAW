<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cadena=$_POST['cadena'];
    $array = str_split($cadena);
    $aux=0;
   
    do{
        $cont=0;
        for($x=0;$x<count($array);$x++){

        if($array[$x]>$array[$x+1]){
            $aux=$array[$x];
            $$array[$x]=$array[$x+1];
            $array[($x+1)]=$aux;
            $cont++;
        }
        }
    }while($cont != 0);
   
    ?>
    
</body>
</html>