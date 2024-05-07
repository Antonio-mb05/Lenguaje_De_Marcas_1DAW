<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 for ($x=1;$x<=10;$x++){
    echo "Tabla del ".$x;
    echo "<br>";
    for($i=0;$i<=10;$i++){
        echo $x."x".$i."=".($i*$x);
        echo "<br>";
      }
    echo "<br>";
 }
  
  ?>
</body>
</html>