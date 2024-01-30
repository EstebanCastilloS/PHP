<?php

$a=9;
$x=10;
$y=9;
$z=7;

$resultado = match ($a) {
    $x, $y => "Valor iguala X o Y",
    $z => "Valor igual a z",
    default => "No coincide con ninguna variable"
};

echo $resultado;