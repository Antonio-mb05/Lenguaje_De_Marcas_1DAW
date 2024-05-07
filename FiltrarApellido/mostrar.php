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

  $registros = mysqli_query($conexion, "SELECT * 
                                        FROM alumnos 
                                        WHERE Apellido1 like '%$_POST[Apellido1]%'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($alumno = mysqli_fetch_array($registros)) {
    echo "Codigo: " . $alumno['idalumno'] . "<br>";
    echo "Nombre: " . $alumno['Nombre'] . "<br>";
    echo "Primer apellido: " . $alumno['Apellido1'] . "<br>";
    echo "Segundo apellido: " . $alumno['Apellido2'] . "<br>";
    echo "NIF: " . $alumno['NIF'] . "<br>";
    echo "Fecha de Nacimiento: " . $alumno['Fecha_Nacimiento'] . "<br>";
    echo "Mail: " . $alumno['Email'] . "<br>";
    echo "Localidad: " . $alumno['Localidad'] . "<br>";
    echo "Sexo: ";
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
    echo "Cuenta de Twitter: " . $alumno['CuentaTwitter'] . "<br>";
    echo "<hr>";

  }

    if (mysqli_num_rows($registros)==0){
        echo "No existe un alumno con ese apellido.";
    } else {
        echo "Se han encontrado ".mysqli_num_rows($registros)." registros con ese apellido.";
    }

  mysqli_close($conexion);
  ?>
</body>
</html>