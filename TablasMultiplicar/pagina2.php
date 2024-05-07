<html>

<head>
  <title>Captura de datos del form</title>
  <link rel="stylesheet" href="estilos.css">
</head>

<body>
  <?php
  $inicio=$_REQUEST['inicio'];
  $fin=$_REQUEST['fin'];
  $operador=$_REQUEST['operador'];

  if $operador=="*"{
    for ($x=$inicio;$x<=$fin;$x++){
      echo "<table>";
        echo "<tr>";
  
          echo "<th>"."Tabla del ".$x."</th>";
            echo "<br>";
            for($i=0;$i<=10;$i++){
             echo "<tr>";
             echo "<td>";
             echo $x."x".$i."=".($i*$x);
             echo "</td>";
             echo "</tr>";
            }
        echo "</tr>";
      echo "</table>";
    }
  }
  else if $operador=="+"{
    for ($x=$inicio;$x<=$fin;$x++){
      echo "<table>";
        echo "<tr>";
  
          echo "<th>"."Tabla del ".$x."</th>";
            echo "<br>";
            for($i=0;$i<=10;$i++){
             echo "<tr>";
             echo "<td>";
             echo $x."x".$i."=".($i+$x);
             echo "</td>";
             echo "</tr>";
            }
        echo "</tr>";
      echo "</table>";
    }
  }
  if $operador=="-"{
    for ($x=$inicio;$x<=$fin;$x++){
      echo "<table>";
        echo "<tr>";
  
          echo "<th>"."Tabla del ".$x."</th>";
            echo "<br>";
            for($i=0;$i<=10;$i++){
             echo "<tr>";
             echo "<td>";
             echo $x."x".$i."=".($i-$x);
             echo "</td>";
             echo "</tr>";
            }
        echo "</tr>";
      echo "</table>";
    }
  }
  if $operador=="/"{
    for ($x=$inicio;$x<=$fin;$x++){
      echo "<table>";
        echo "<tr>";
  
          echo "<th>"."Tabla del ".$x."</th>";
            echo "<br>";
            for($i=0;$i<=10;$i++){
             echo "<tr>";
             echo "<td>";
             echo $x."x".$i."=".($i/$x);
             echo "</td>";
             echo "</tr>";
            }
        echo "</tr>";
      echo "</table>";
    }
  }



  

  ?>
</body>

</html>