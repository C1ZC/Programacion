<?php

$ArregloA=array("5","7","3","30","25");
$ArregloB=array("7","6","8","29","55");
$Resultado=[ ];

for($i=0;$i< count($ArregloA);$i++){
    $Resultado[$i] = $ArregloA[$i] + $ArregloB[$i];

    echo'<pre>';
    print_r($Resultado);
    echo '</pre>';


}

?>