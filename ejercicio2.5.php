<?php
$un_bool = TRUE;   // un valor booleano
$un_str  = "cadena 1";  // una cadena de caracteres
$un_str2 = 'C4d3n4 2 !"#$%';  // una cadena de caracteres
$un_int  = 12;     // un número entero
$un_dou  = 1.2;     // un número entero
$un_arr = array(2,3,4,5);
$un_nul = null;

echo '<center>';
echo gettype($un_bool);  // imprime: boolean
echo '</br>';
echo 'boleano :' ,$un_bool;
echo '</br></br>';
echo gettype($un_str);  // imprime: string 1
echo '</br>';
echo 'Cadena 1 :' ,$un_str;
echo '</br></br>';
echo gettype($un_str2);  // imprime: string 2 
echo '</br>';
echo 'Cadena 2 :' ,$un_str2;
echo '</br></br>';
echo gettype($un_int);  // imprime: interger
echo '</br>';
echo 'Numero entero :' ,$un_int;
echo '</br></br>';
echo gettype($un_dou);  // imprime: double
echo '</br>';
echo 'Numero Double :' ,$un_dou;
echo '</br></br>';
echo gettype($un_arr);  // imprime: double
echo '</br>';
print_r($un_arr);
echo '</br></br>';
echo gettype($un_nul);  // imprime: double
echo '</br>';
echo 'Dato nulo :' ,$un_nul;
echo '</center>';

?>
