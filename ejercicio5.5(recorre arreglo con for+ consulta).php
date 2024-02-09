<?php
$personas = [
 ['altura' => 176, 'edad' => 19],
 ['altura' => 150, 'edad' => 17],
 ['altura' => 155, 'edad' => 20],
 ['altura' => 173, 'edad' => 21],
 ['altura' => 139, 'edad' => 17],
 ['altura' => 157, 'edad' => 79],
 ['altura' => 177, 'edad' => 54],
 ['altura' => 149, 'edad' => 44],
 ['altura' => 179, 'edad' => 32]];

const alt_min = 170;
const edad_min= 18;

$cant_aptos = 0;
$cant_no_aptos = 0;


for($i = 0 ; $i < count($personas); $i++){

 if($personas[$i]['altura'] >= alt_min && $personas[$i]['edad'] >= edad_min ){
     $cant_aptos++;
 }else{
     $cant_no_aptos++;
    }

} 
$cant_aptos = 0;
$cant_no_aptos = 0;

foreach($personas as $p){
   if($p['altura'] >= alt_min && $p['edad'] >= edad_min ){
     $cant_aptos++;
 }else{
     $cant_no_aptos++;
    }
}

echo "No aptos: " . $cant_no_aptos ."\n";
echo "Aptos: " . $cant_aptos;
?>