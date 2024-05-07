<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  $conexion = mysqli_connect("localhost", "root", "", "datosalumnos") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select * from alumnos") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($alumno = mysqli_fetch_array($registros)) {
    echo "Codigo:" . $alumno['idalumno'] . "<br>";
    echo "Nombre:" . $alumno['Nombre'] . "<br>";
    echo "Primer apellido:" . $alumno['Apellido1'] . "<br>";
    echo "Segundo apellido:" . $alumno['Apellido2'] . "<br>";
    echo "NIF:" . $alumno['NIF'] . "<br>";
    echo "Fecha de Nacimiento:" . $alumno['Fecha_Nacimiento'] . "<br>";
    echo "Mail:" . $alumno['Email'] . "<br>";
    echo "Localidad:" . $alumno['Localidad'] . "<br>";
    echo "Sexo:";
    switch ($alumno['Sexo']) {
      case 1:
      echo "Masculino";
      break;
      case 2:
      echo "Femenino";
      break;
      case 3:
      echo "Otro";
      break;
    }
    echo "<br>";
    echo "Cuenta de Twitter:" . $alumno['CuentaTwitter'] . "<br>";
    echo "<button type=button>
        <a href=borrar.php?id=" . $alumno['idalumno'] . "> <img src=delete.png> </a>
        </button>";
    echo "<button type=button>
        <a href=Edit.php?id=" . $alumno['idalumno'] . "> <img src=edit.png> </a>
        </button>";
    echo "<hr>";

  }

  mysqli_close($conexion);
  ?>
</body>
</html>