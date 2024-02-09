<?php
$a = 4;
$b = 5;
$c = 10;
$d = 3;
$e = 7;
$f = 9;

echo "<center>";
echo "A = ".$a."</br>";
echo "B = ".$b."</br>";
echo "C = ".$c."</br>";
echo "D = ".$d."</br>";
echo "E = ".$e."</br>";
echo "F = ".$f."</br>";


$x = ($a<$b) OR (!($a<>$c) AND ($a+$b<$d OR $a<$f));

$y = $d * $b + $f - $a / $b * $f;

echo "X = ".$x."</br>";
echo "Y = ".$y."</br>";


echo "</center>";
?>