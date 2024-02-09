<?php
echo "<head>";
echo "<title>Segunda Evaluacion</title>";
echo "<meta charset='UTF-8'>";
echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>"; 
echo "<h1 style='color: crimson';><center> Calcular el Area de un Circulo</h1></center>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "</head>";
if(!isset($_POST["control"])){


echo "<body>";
echo "<div>";
echo '<form action="ejercicio2.2.php" method="POST"><center>'; /* metodo POST ingresa y guarda datos de manera filtrada u oculta */
echo '<input type ="hidden" name="control" value="12345">';
echo "Ingrese Radio <input type='text' name='Numero1'></br>";
echo '<input type="submit" value="Calcular"></br></br>';
echo "</center>";
}
else{
$num1 = $_POST['Numero1'];
$num2 = "3.1416";
$promedio = (2*$num2)*$num1;
$area = ($promedio*$num1)/2;

echo "<center>";
echo "El Radio Circulo: " . $num1 . ' cm </br>';
echo "El Perimetro de un Circulo: " . $promedio . ' cm</br>';
echo "El Area de un Circulo: " . $area . ' cm<sup>2</sup></br>';
echo "<a href='ejercicio2.2.php'>Nuevo Calculo</a>";

echo "</form></center>";
echo "</div>";
echo "</body>";
}
?>