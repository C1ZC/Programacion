<?php
include("conexion.php");
if(!$conexion){
    echo "No se puede conectar al servidor";
}else{
    $consulta = "SELECT facultad, SUM(Salario) AS 'gasto' FROM profesores GROUP BY 'facultad'";
    $resultado = mysqli_query($conexion, $consulta);
    while($fila = mysqli_fetch_assoc($resultado)){
        echo("Total Suma Facultad ".$fila["facultad"]." : ".$fila["gasto"]."<br/>");

    }
}
?>