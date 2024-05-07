<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <?php
    $numeros = array();

    //Bucle para rellenar la matriz con num randoms
    for($filas=0; $filas<20; $filas++){

        for($columnas=0; $columnas<20; $columnas++){

            $aleatorios = rand(0,9);
            $numeros[$filas][$columnas]=$aleatorios;

        }
    
    }

    //Recorremos la misma matriz por filas
    for($filas=0; $filas<20; $filas++){

        for($columnas=0; $columnas<20; $columnas++){

            //Comprobamos si el numero es par o impar
            if($numeros[$filas][$columnas]%2!=0){
                echo "<div class=impar>";
                echo $numeros[$filas][$columnas];
                echo "</div>";
            }
            if($numeros[$filas][$columnas]%2==0){
                echo "<div class=par>";
                echo $numeros[$filas][$columnas];
                echo "</div>";
            }
        }
    
    }

    echo "<div class=espacio>.</div>";


    //Recorremos la misma matriz por filas
    for($filas=0; $filas<20; $filas++){

        for($columnas=0; $columnas<20; $columnas++){

            //Comprobamos si el numero es par o impar
            if($numeros[$columnas][$filas]%2!=0){
                echo "<div class=impar>";
                echo $numeros[$columnas][$filas];
                echo "</div>";
            }
            if($numeros[$columnas][$filas]%2==0){
                echo "<div class=par>";
                echo $numeros[$columnas][$filas];
                echo "</div>";
            }
        }
    
    }

    ?>
</body>
</html>