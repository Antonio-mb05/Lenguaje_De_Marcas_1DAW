<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "alumnos") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso) values 
                       ('$_POST[nombre]','$_POST[mail]',$_POST[codigocurso])")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno fue dado de alta.";
  ?>
</body>
</body>
</html>