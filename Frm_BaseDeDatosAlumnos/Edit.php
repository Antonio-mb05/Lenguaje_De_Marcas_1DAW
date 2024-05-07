<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos.css">
    <title>Document</title>
</head>
<body>
<?php
  $id = $_GET['id'];
  $conexion = mysqli_connect("localhost", "root", "", "datosalumnos") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select * from alumnos where idalumno ='$id'") or
    die("Problemas en el select:" . mysqli_error($conexion));


    echo "<h1>Modificar Alumno</h1><br>";

  $alumnos = mysqli_fetch_array($registros);

  echo "<form action='Update.php' method='post'>
    <input type='hidden' name='idalumno' value=".$alumnos['idalumno'].">
    Nombre:
    <input value=".$alumnos['Nombre']." type='text' name='Nombre' pattern='^(0?[1-9]|[12][0-9]|3[01])[\\/](0?[1-9]|1[012])[/\\/](19|20)\\d{2}$'><br><br>
    Primer apellido:
    <input value=".$alumnos['Apellido1']." type='text' name='Apellido1'><br><br>
    Segundo apellido:
    <input value=".$alumnos['Apellido2']." type='text' name='Apellido2'><br><br>
    NIF:
    <input value=".$alumnos['NIF']." type='text' name='NIF' pattern='^[0-9]{8}[ABDEFGHJKLMNOPQRSTVWXYZ]{1}$'><br><br>
    Fecha de Nacimiento:
    <input value=".$alumnos['Fecha_Nacimiento']." type='date' name='Fecha_Nacimiento'><br><br>
    Mail:
    <input value=".$alumnos['Email']." type='email' name='Email'><br><br>
    Localidad:
    <input value=".$alumnos['Localidad']." type='text' name='Localidad'><br><br>
    Sexo:
    <select name='Sexo'>
        <option value='1' ".($alumnos['Sexo'] == 1 ? "selected": "").">Masculino</option>
        <option value='2' ".($alumnos['Sexo'] == 2 ? "selected": "").">Femenino</option>
        <option value='3' ".($alumnos['Sexo'] == 3 ? "selected": "").">Otro</option>
    </select>
    <br><br>
    Cuenta de Twitter:
    <input value=".$alumnos['CuentaTwitter']." type='text' name='CuentaTwitter' pattern='^@([A-Za-z0-9_]{1,15})$'><br><br>

    <input type='submit' value='Guardar'>
</form>"


?>   
</body>
</html>