<?php
$servidor ="localhost";
$nombreusuario="root";
$password="root";
$conexion = new mysqli($servidor, $nombreusuario, $password);
if($conexion-> connect_error){
die("Conexion Fallida:". $conexion-> connect_error);
}
echo "Conexion exitosa.";
mysqli_close($conexion);
?>