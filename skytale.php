<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SKYTALE</title>
<style>
table {
border-collapse: collapse;
width: 100%;
}

th, td {
border: 1px solid black;
padding: 5px;
}
</style>
</head>
<body>
<?php
$frase = "En un lugar de la Mancha, de cuyo nombre no quiero acordarme";

echo $frase;
echo "<br>";
echo "<br>";

$longitud_frase = strlen($frase);

// **Especificar filas y columnas**
$filas_original = 6;
$columnas_original = 10;
$filas_traspuesta = 10;
$columnas_traspuesta = 6;

// **Ajustar el tamaño de las matrices**
$matriz = array_fill(0, $filas_original, array());
for ($i = 0; $i < $filas_original; $i++) {
$matriz[$i] = array_fill(0, $columnas_original, "");
}

$matriz_traspuesta = array_fill(0, $filas_traspuesta, array());
for ($i = 0; $i < $filas_traspuesta; $i++) {
  $matriz_traspuesta[$i] = array_fill(0, $columnas_traspuesta, "");
  }
// **Rellenar la matriz original con la frase**
$i = 0;
for ($j = 0; $j < $longitud_frase; $j++) {
$matriz[$i][$j % $columnas_original] = $frase[$j];
if (($j + 1) % $columnas_original === 0) {
$i++;
}
}

// **Calcular la matriz traspuesta**
for ($i = 0; $i < $filas_traspuesta; $i++) {
for ($j = 0; $j < $columnas_traspuesta; $j++) {
$matriz_traspuesta[$i][$j] = isset($matriz[$j][$i]) ? $matriz[$j][$i] : "";
}
}

// **Generar las tablas HTML**
echo "<table>";
for ($i = 0; $i < $filas_original; $i++) {
echo "<tr>";
for ($j = 0; $j < $columnas_original; $j++) {
$caracter = isset($matriz[$i][$j]) ? $matriz[$i][$j] : "";
echo "<td>$caracter</td>";
}
echo "</tr>";
}

echo "<table>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
for ($i = 0; $i < $filas_traspuesta; $i++) {
echo "<tr>";
for ($j = 0; $j < $columnas_traspuesta; $j++) {
$caracter = isset($matriz_traspuesta[$i][$j]) ? $matriz_traspuesta[$i][$j] : "";
echo "<td>$caracter</td>";
}
echo "</tr>";
}
?>
</body>
</html>
