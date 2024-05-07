<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tabla = array(
                    array(4,5,3,2,5,4),
                    array(3,7,2,5,8,4),
                    array(2,8,6,3,9,6),
                    array(3,9,5,2,9,3),
                    array(2,6,4,7,9,2),
                    array(3,7,5,6,9,1)
                );

    //mostrar matriz    
    echo "<table>";
    for($filas=0;$filas<6;$filas++){
        echo "<tr>";
        for($columnas=0;$columnas<6;$columnas++){
            echo "<th>".$tabla[$filas][$columnas]."</th>";
        }
        echo "</tr>";
    }
    echo "</table>";

    //Ver los puntos de silla
    
    $posicion=0;
    $posicion2=0;

    for($filas=0;$filas<6;$filas++){

        //sacar el maximo de cada fila
        $maximo=0;
        for($columnas=0;$columnas<6;$columnas++){
            if($tabla[$filas][$columnas]>$maximo){
                $maximo=$tabla[$filas][$columnas];
                $posicion=$columnas;
            }
        }

        //sacar el minimo de cada columna
        $minimo=10;
        for($columnas=0;$columnas<6;$columnas++){
            if($tabla[$columnas][$posicion]<$minimo){
                $minimo=$tabla[$columnas][$posicion];
                $posicion2=$columnas;
            }
        }

        if($maximo==$minimo){
            echo "El punto de silla es: ".$maximo." en la fila ".$posicion2." y en la columna ".$posicion;
        }
    }
    
    ?>
</body>
</html>