<?php
interface a
{
    const b = 'Interface constant';
}

// Imprime: Interface constant
echo a::b;


// Sin embargo ésto no funcionará ya que no está permitido
// sobrescribir constantes
class b implements a
{
    const b = 'Class constant';
}
?>
