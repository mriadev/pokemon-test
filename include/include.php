<?php
/**
* Determinar si el pokemon se encuentra ya en el array
*/

function existePokemon($pokemon,$array):bool
{
$lExiste = false;
foreach ($array as $clave => $valor) {
    if ($valor == $pokemon){
        $lExiste = true;
    }
}
return $lExiste;
}
?>