<?php
$tiempo = 2;
$sueldo = 400000;
$pago;

if( $tiempo >= 10 ){

    $pago = "Sueldo es ".$sueldo+($sueldo*10/100);
}
else if( $tiempo <10 AND $tiempo >=5){
    $pago = "Sueldo es ".$sueldo+($sueldo*7/100);
}
else if( $tiempo <5 AND $tiempo >=3){
    $pago = "Sueldo es ".$sueldo+($sueldo*5/100);
}
else if( $tiempo <3 ){
    $pago = "Sueldo es ".$sueldo+($sueldo*3/100);
}
else{
    $pago = "Valor incorrecto";
}
print($pago);
?>