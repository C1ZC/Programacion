<?php
echo "<head>";
echo "<title>Segunda Evaluacion</title>";
echo "<meta charset='UTF-8'>";
echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>"; 
echo "<h1 style='color: crimson';><center> Calcular Area de un Triangulo</h1></center>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "</head>";
if(!isset($_POST["control"])){


echo "<body>";
echo "<div>";
echo '<form action="ejercicio2.1.php" method="POST"><center>'; /* metodo POST ingresa y guarda datos de manera filtrada u oculta */
echo '<input type ="hidden" name="control" value="12345">';
echo "Ingrese Base <input type='text' name='Numero1'></br>";
echo "Ingrese Altura <input type='text' name='Numero2'></br>";
echo '<input type="submit" value="Calcular"></br></br>';
echo "</center>";
}
else{
$num1 = $_POST['Numero1'];
$num2 = $_POST['Numero2'];
$promedio= ($num1*$num2)/2;
echo "<center>";
echo "Base del triangulo: " . $num1 . '</br>';
echo "Altura del triangulo: " . $num2 . '</br>';
echo "El area del triangulo es: " . $promedio . '</br>';
echo "<a href='ejercicio2.1.php'>Nuevo Calculo</a>";

echo "</form></center>";
echo "</div>";
echo "</body>";
}
?>