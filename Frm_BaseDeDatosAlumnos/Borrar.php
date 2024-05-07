<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="4;url=Formulario.html">
    <title>Document</title>
</head>
<body>
    <?php
    $id = $_GET['id'];
    
    $conexion = mysqli_connect("localhost", "root", "", "datosalumnos") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "delete from alumnos where idalumno='$id'") or
    die("Problemas en el select:" . mysqli_error($conexion));

    echo "El alumno fue borrado.";
    ?>
</body>
</html>