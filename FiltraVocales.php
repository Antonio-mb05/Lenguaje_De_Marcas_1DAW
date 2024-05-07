<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 $texto="Hola Mundo";
 echo $texto;
 echo "<br>";

 for($x=0; $x<strlen($texto); $x++){
    echo substr($texto,$x,1);
    echo "<br>";
 }
 $vocales =['a', 'e', 'i', 'o', 'u'];
 $resultado=str_replace($vocales, '', $texto);
 echo"<br>";
 echo $resultado;


  ?>
    
</body>
</html>