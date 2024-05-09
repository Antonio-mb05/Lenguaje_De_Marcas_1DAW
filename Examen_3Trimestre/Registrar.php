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

  mysqli_query($conexion, "insert into alumnos(Nombre,Apellido1,Apellido2,NIF,Fecha_Nacimiento,Email,Localidad,Sexo,CuentaTwitter) values 
                       ('$_POST[Nombre]','$_POST[Apellido1]','$_POST[Apellido2]', '$_POST[NIF]', '$_POST[Fecha_Nacimiento]', '$_POST[Email]', '$_POST[Localidad]', $_POST[Sexo], '$_POST[CuentaTwitter]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno fue dado de alta.";
  ?>
</body>
</html>