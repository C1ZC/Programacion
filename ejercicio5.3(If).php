<?php
$mes = 5;
$estacion;

if( $mes == 1 ){
    $estacion = "Enero";
}
else if( $mes == 2){
    $estacion = "Febrero";
}
else if( $mes == 3 ){
    $estacion = "Marzo";
}
else if( $mes == 4 ){
    $estacion = "Abril";
}
else if( $mes == 5 ){
    $estacion = "Mayo";
}
else if( $mes == 6 ){
    $estacion = "Junio";
}
else if( $mes == 7 ){
    $estacion = "Julio";
}
else if( $mes == 8 ){
    $estacion = "Agosto";
}
else if( $mes == 9 ){
    $estacion = "Septiembre";
}
else if( $mes == 10 ){
    $estacion = "Octubre";
}
else if( $mes == 11 ){
    $estacion = "Noviembre";
}
else if( $mes == 12 ){
    $estacion = "Diciembre";
}
else{
    $estacion = "Valor incorrecto";
}
print($estacion);
?>