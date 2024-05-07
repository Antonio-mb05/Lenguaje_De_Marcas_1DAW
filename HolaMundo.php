<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  echo "Hola Mundo";
  echo "<br>";
  echo "Como estas";
  echo "<br>";

  $dia = 24; //Se declara una variable de tipo integer.
  $sueldo = 758.43; //Se declara una variable de tipo double.
  $nombre = "juan"; //Se declara una variable de tipo string.
  $exite = true; //Se declara una variable boolean.
  echo "Variable entera:";
  echo $dia;
  echo "<br>";
  echo "Variable double:";
  echo $sueldo;
  echo "<br>";
  echo "Variable string:";
  echo $nombre;
  echo "<br>";
  echo "Variable boolean:";
  echo $exite."<br>";
 
  for($x=0;$x<=10;$x++){
    echo "1+".$x."=".($x+1);
    echo "<br>";
  }
  
  echo "<br>";

  for($i=0;$i<=10;$i++){
    echo "5x".$i."=".($i*5);
    echo "<br>";
  }

  ?>
</body>
</html>