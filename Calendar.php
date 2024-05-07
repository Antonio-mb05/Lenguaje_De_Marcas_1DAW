<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Calendario</h2>
    <form method="post">
        <label for="mes">Mes (1-12):</label>
        <input type="number" name="mes" min="1" max="12" required>
        <label for="ano">Año (1601-3000):</label>
        <input type="number" name="ano" min="1601" max="3000" required>
        <button type="submit">Mostrar Calendario</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mes = $_POST["mes"];
        $ano = $_POST["ano"];
        $diasMes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);
        $primerDiaSemana = date("N", strtotime("$ano-$mes-01"));
        $nombreMes = date("F", mktime(0, 0, 0, $mes, 1, $ano));
    ?>

    <h3><?php echo $nombreMes . " " . $ano; ?></h3>
    <table>
        <tr>
            <th>Lun</th>
            <th>Mar</th>
            <th>Mie</th>
            <th>Jue</th>
            <th>Vie</th>
            <th>Sab</th>
            <th>Dom</th>
        </tr>
        <tr>
        <?php
            $dia = 1;
            $columna = 1;
            while ($columna < $primerDiaSemana) {
                echo "<td></td>";
                $columna++;
            }
            while ($dia <= $diasMes) {
                echo "<td>$dia</td>";
                if ($columna % 7 == 0) {
                    echo "</tr><tr>";
                }
                $dia++;
                $columna++;
            }
            while ($columna % 7 != 1) {
                echo "<td></td>";
                $columna++;
            }
        ?>
        </tr>
    </table>

    <?php } ?>
</body>
</html>