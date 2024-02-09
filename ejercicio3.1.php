<?php
echo "<head>";
echo "<title>Segunda Evaluacion</title>";
echo "<meta charset='UTF-8'>";
echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>"; 
echo "<h1 style='color: crimson';><center> Control N°3</h1></center>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "</head>";
if(!isset($_POST["control"])){


echo "<body>";
echo "<div>";
echo '<form action="ejercicio3.1.php" method="POST"><center>'; /* metodo POST ingresa y guarda datos de manera filtrada u oculta */
echo '<input type ="hidden" name="control" value="12345">';
echo "Ingrese La Edad <input type='text' name='Numero1'></br>";
echo '<input type="submit" value="Calcular"></br></br>';
echo "</center>";
}
else{
$num1 = $_POST['Numero1'];
echo "<center>";
if ( $result1 = $num1 < 18) {
    echo "Tu Edad es de : " . $num1 ."  Eres menor de edad, no podemos
    contratarte </br>";
}
else if ( $result2 = $num1 >= 18 and $num1<= 60){
    echo "Tu Edad es de : " . $num1 ."  Es posible
    que usted sea un candidato al cargo </br>";
}
else{
    $result3 = $num1 > 60;
    echo "Tu Edad es de : " . $num1 ."  Lo sentimos, pero usted no cumple el
    perfil del cargo </br>";
}

echo "<a href='ejercicio3.1.php'>Nuevo Calculo</a>";

echo "</form></center>";
echo "</div>";
echo "</body>";
}
?>