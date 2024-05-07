<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2;url=Mostrar.php">
    <title>Document</title>
</head>
<body>
<?php
  $conexion = mysqli_connect("localhost", "root", "", "datosalumnos") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "update alumnos SET
                           Nombre = '$_POST[Nombre]',
                           Apellido1 = '$_POST[Apellido1]',
                           Apellido2 = '$_POST[Apellido2]',
                           NIF = '$_POST[NIF]',
                           Fecha_Nacimiento = '$_POST[Fecha_Nacimiento]',
                           Email= '$_POST[Email]',
                           Localidad = '$_POST[Localidad]',
                           Sexo = '$_POST[Sexo]',
                           CuentaTwitter = '$_POST[CuentaTwitter]' where idalumno = '$_POST[idalumno]'")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno fue actualizado";
  ?>
</body>
</html>