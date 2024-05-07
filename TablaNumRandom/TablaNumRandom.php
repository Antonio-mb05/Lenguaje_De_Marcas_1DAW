<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<table>";
    echo "<tr class='cabecera'><th>Número</th><th>Resultado</th></tr>";
    for($x=1;$x<=10;$x++){
        $num=rand(1,100);

        echo "<tr><td>$num</td>";
        
        if($num < 50){
            echo "<td> Es menor que 50 </td>";
        }else{
            echo "<td> Es mayor que 50 </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>
</html>