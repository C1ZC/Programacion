<?php
echo "<head>";
echo "<title>Segunda Evaluacion</title>";
echo "<meta charset='UTF-8'>";
echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>"; 
echo "<h1 style='color: crimson';><center> Calcular el Area de un Circulo, Cuadrado y Triangulo</h1></center>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "</head>";
function operaciones($num1, $num2, $operacion) {
    $resultado = 0;
    if($operacion == "Circulo") {
        $num2 = '3.1416';
        $resultado = (((2*$num2)*$num1)*$num1)/2;;
    }else if($operacion == "Triangulo") {
    $resultado = ($num1*$num2)/2;
    }else if($operacion == "Cuadrado") {
    $resultado = $num1 * $num2;
    }
    return $resultado; 
    }
echo "<body>";
//Circulo
if(!isset($_POST["control1"])){
echo "<div>";
echo "<h3 style='color: crimson';><center> Calcular el Area de un Circulo</h1></center>";
echo '<form action="ejercicio4.1.php" method="POST"><center>'; 
echo '<input type ="hidden" name="control1" value="12345">';
echo "Ingrese Radio <input type='text' name='Numeroc1'></br>";
echo '<input type ="hidden" name="Numeroc2" value="3.1416">';
echo "</center>";
}
else{
$num1 = $_POST['Numeroc1'];    
$num2 = $_POST['Numeroc2'];

echo "<center>";
echo "</br></br>";
echo "<h3 style='color: crimson';><center> Area de un Circulo</center></h1>";
echo "El Radio Circulo: " . $num1 . ' cm </br>';
echo "El Area de un Circulo: ". operaciones($num1,$num2, "Circulo" ) .' cm<sup>2</sup></br>';


echo "</form></center>";
echo "</div>";

}
//triangulo
if(!isset($_POST["control2"])){
    echo "<body>";
    echo "<div>";
    echo "<h3 style='color: crimson';><center> Calcular el Area de un Triangulo</h1></center>";
    echo '<form action="ejercicio4.1.php" method="POST"><center>'; 
    echo '<input type ="hidden" name="control2" value="12345">';
    echo "Ingrese Base <input type='text' name='Numerot1'></br>";
    echo "Ingrese Altura <input type='text' name='Numerot2'></br>";
    echo "</center>";
    }
    else{
    $num1 = $_POST['Numerot1'];
    $num2 = $_POST['Numerot2'];
    echo "<center>";
    echo "</br></br>";
    echo "<h3 style='color: crimson';> Area de un Triangulo</h1>";
    echo "Base del triangulo: " . $num1 . '</br>';
    echo "Altura del triangulo: " . $num2 . '</br>';
    echo "El area del triangulo es: " . operaciones($num1,$num2, "Triangulo" ) . '</br>';
    echo "</form></center>";
    echo "</div>";
    }
    //Cuadrado
    if(!isset($_POST["control3"])){
    echo "<body>";
    echo "<div>";
    echo "<h3 style='color: crimson';> <center>Calcular el Area de un Cuadrado</center></h1>";
    echo '<form action="ejercicio4.1.php" method="POST"><center>'; 
    echo '<input type ="hidden" name="control3" value="12345">';
    echo "Ingrese un Lado <input type='text' name='Numerou1'></br>";
    echo '<input type="submit" value="Calcular"></br></br>';
    echo "</center>";
    }
    else{
    $num1 = $_POST['Numerou1'];
    $num2 = $_POST['Numerou1'];
    echo "<center>";
    echo "</br></br>";
    echo "<h3 style='color: crimson';> Area de un Cuadrado</h1>";
    echo "Largo del Cuadrado: " . $num1 . '</br>';
    echo "Ancho del Cuadrado: " . $num2 . '</br>';
    echo "El area del Cuadrado es: " . operaciones($num1,$num2, "Cuadrado" ) . '</br>';
    echo "</br>";
    echo "<a href='ejercicio4.1.php'>Nuevo Calculo</a>";
    
    echo "</form></center>";
    echo "</div>";
   
    }

    echo "</body>";

?>

