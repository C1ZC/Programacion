<?php
//Funciones Nativas
//round()
/* Esta función nos permitirá hacer redondeo, osea recibirá 
como parámetro un número y si el valor después del punto 
(o de la coma) es menor a 50 redondeará para abajo, 
de lo contrario lo hará un número más:*/
$decimal = 1.75;
$decimal_redondeado = round($decimal);
echo "round()";
echo $decimal_redondeado;

//floor()
//Esta función también hará un redondeo 
//pero siempre para abajo, osea que si tenemos esto:
$decimal1 = 1.50;
$decimal_redondeado1 = floor($decimal1);
echo "floor()";
echo $decimal_redondeado1;

//ceil()
//Si en cambio queremos que el redondeo sea 
//siempre para arriba deberíamos usar ceil():
$decimal = 1.50;
$decimal_redondeado = ceil($decimal);
echo $decimal_redondeado;

//rand()
//La función rand() es una de las más útiles que hay.. 
//Esta función generará un número al azar que irá desde un 
//rango desde/hasta. Por ejemplo si quisiéramos devolver 
//un número desde el 1 al 9 (inclusive):
$numero_al_azar = rand(1, 9);
echo $numero_al_azar;

//strtoupper()
//Convierte una cadena en mayúscula;
$palabra = 'Me encantan las arepas venezolanas.';
$palabra_mayuscula = strtoupper($palabra);
echo $palabra_mayuscula;

//strtolower()
//Esta función es lo contrario a la anterior, 
//convertirá una cadena pero en minúsculas:
$palabra1 = 'No GRITES, habla bajito.';
$palabra_minuscula1 = strtolower($palabra1);
echo $palabra_minuscula1;

//ucfirst()
//En este caso, esta función sólo nos convertirá la primer 
//letra de una cadena en mayúscula:
$palabra = 'fernando';
$nombre = ucfirst($palabra);
echo $nombre;

//ucwords()
//En este caso, esta función recibirá una cadena y 
//convertirá el mayúscula los primeros caracteres de cada palabra:
$palabra = 'fernando gonzalo gaitan';
$nombre_completo = ucwords($palabra);
echo $nombre_completo;

//strlen()
//Nos dará la cantidad de caracteres que tiene una cadena:
$cancion = 'De aquel amor de música ligera, nada nos libra, nada más queda';
$cantidad_de_caracteres = strlen($cancion);
echo $cantidad_de_caracteres;

//substr()
//Esta función nos permitirá seleccionar cuántos caracteres queremos 
//mostrar de una cadena. Recibe tres parámetros, el primero es el la 
//cadena en sí, el segundo es a partir de qué caracter queremos que 
//se muestre (empieza desde 0) y el tercero hasta cuál:
$cancion = 'De aquel amor de música ligera, nada nos libra, nada más queda';
$cancion_cortada = substr($cancion, 0, 11);
echo $cancion_cortada;

//trim()
//Ésta es otra de las funciones más usadas de PHP, 
//se trata de una función simple, pero muy útil, la misma 
//cortará los espacios en las cadenas tanto adelante como atrás:
$cadena = ' Hola ';
$cadena_cortada = trim($cadena);
echo $cadena_cortada;
//Para comprobar su correcto funcionamiento podemos 
//utilizar la función strlen() y ver el comportamiento de trim():
$cadena = ' Hola ';
$cadena_cortada = trim($cadena);
echo strlen($cadena) . '<br />';
echo strlen($cadena_cortada) . '<br />';
//Sin embargo trim() no sólo funciona para 
//eliminar espacios al principio y al final, puede eliminar 
//cualquier tipo de caracter si le agregamos un segundo 
//parámetro con el mismo:
$cadena = '///Hola///';
$cadena_cortada = trim($cadena, '/');
echo $cadena_cortada;

//str_replace()
//La función str_replace() nos permitirá buscar 
//una cadena específica y reemplazarla por otra, 
//por ejemplo podríamos reemplazar guiones bajo por guiones del medio:
$frase = 'Marge_creo_que_odio_a_Mickael_Jackson.';
 $frase_modificada = str_replace('_', '-', $frase);
 echo $frase_modificada;
//Pero como dijimos antes, se pueden modificar cadenas, 
//osea no sólo un caracter:
$frase = 'Una manzana y una manzana son dos manzanas';
$frase_modificada = str_replace('manzana', 'naranja', $frase);
echo $frase_modificada;

//var_dump()
//La función var_dump() es muy útil en tiempo de desarrollo 
//a la hora de testear datos ya sean de una variable o de lo 
//que devuelve una función. Esta función nos devolverá la 
//estructura de una variable cualquiera:
$cadena = 'Manzana';
$numero = 5;
$valor_logico = true;
$coleccion = array('Azul', 'Rojo', 'Verde');
echo '<pre>';
var_dump($cadena) . '<br />';
var_dump($numero) . '<br />';
var_dump($valor_logico) . '<br />';
var_dump($coleccion) . '<br />';
echo '</pre>';
/*devuelve
string(7) "Manzana"
int(5)
bool(true)
array(3) {
  [0]=>
  string(4) "Azul"
  [1]=>
  string(4) "Rojo"
  [2]=>
  string(5) "Verde"
}*/

//sort()
//La función sort() permite ordenar un array 
//alfabéticamente, vale aclarar que el valor del parámetro 
//se hace por referencia, por tanto éste se modificará directamente:
    $nombres = array('Juan', 'Pedro', 'Maria', 'Jorge', 'Ana');
    sort($nombres);
    foreach($nombres as $item){
       echo $item . '<br />';
    }
//rsort()
//Funciona igual que sort(), sólo que el orden lo hace de forma descendente:
    $nombres = array('Juan', 'Pedro', 'Maria', 'Jorge', 'Ana');
    rsort($nombres);
    foreach($nombres as $item){
       echo $item . '<br />';
    }
//array_push()
//Agrega una posición nueva al final de un array, recibe dos parámetros, 
//el mismo array y el valor nuevo:
$nombres = array('Juan', 'Pedro', 'Maria', 'Jorge', 'Ana');
array_push($nombres, 'Carlos');
foreach($nombres as $item){
   echo $item . '<br />';
}
//array_unshift()
//A diferencia de array_push() agrega una nueva posición, 
//pero al principio:
$nombres = array('Juan', 'Pedro', 'Maria', 'Jorge', 'Ana');
array_unshift($nombres, 'Carlos');
foreach($nombres as $item){
   echo $item . '<br />';
}
//in_array()
//Buscará un valor dentro de un array, 
//si lo encuentra devuelve true y sino false:
 $nombres = array('Juan', 'Pedro', 'Maria', 'Jorge', 'Ana');
 $nombre_a_buscar = 'Jorge';
 if(in_array($nombre_a_buscar, $nombres)){
    echo 'El nombre se encuentra en la lista';
 }else{
    echo 'El nombre NO se encuentra en la lista';
 }
//count()
//Devuelve la cantidad de posiciones que tiene un array:
$nombres = array('Juan', 'Pedro', 'Maria', 'Jorge', 'Ana');
$nombres_total = count($nombres);
echo $nombres_total;

//explode()
//La función explode() convertirá un string en un array 
//indicándole como referencia un valor que permitirá separar
// las distintas posiciones. Por ejemplo si tuviéramos una cadena:
$paises_cadena = 'Argentina - Bolivia - Brasil - Chile - Paraguay - Uruguay';
//Y quisiéramos convertir esto en un array en donde cada posición 
//será un país, deberíamos usar un delimitador, que en este 
//caso es el signo ‘-‘:
$paises_cadena = 'Argentina - Bolivia - Brasil - Chile - Paraguay - Uruguay';
$paises_arreglo = explode('-', $paises_cadena);
foreach($paises_arreglo as $item){
   echo $item . '<br />';
}

//impode()
//Esta función es lo inverso a explode(), convierte un array 
//en un string, y concatenará la cadena con las distintas 
//posiciones por un delimitador:
$paises_arreglo = array('Colombia', 'Ecuador', 'Peru', 'Venezuela');
$paises_cadena = implode(' - ', $paises_arreglo);
echo $paises_cadena;

?>