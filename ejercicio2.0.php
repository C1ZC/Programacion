<?php
echo "<head>";
echo "<title>Primera Evaluacion</title>";
echo "<meta charset='UTF-8'>";
echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>"; 
echo "<h1 style='color: crimson';><center> Promedio Notas</h1></center>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "</head>";

echo "<body>";
echo "<div>";
echo '<form action="ejercicio2a.php" method="POST"><center>'; /* metodo post ingresa y guarda datos de manera filtrada u oculta */
echo "Ingrese nota N° 1 <input type='text' name='Numero1'></br>";
echo "Ingrese nota N° 2 <input type='text' name='Numero2'></br>";
echo "Ingrese nota N° 3 <input type='text' name='Numero3'></br>";
echo '<input type="submit" value="Calcular"></br></br>';
?>
<?php
$num1 = (isset($_GET['Numero1']));
$num2 = (isset($_GET['Numero2']));
$num3 = (isset($_GET['Numero3']));
$promedio= ($num1+$num2+$num3)/3;

echo "El Promedio de sus Notas es: " . $promedio . '</br>';

echo "</form></center>";
echo "</div>";
echo "</body>";
?>