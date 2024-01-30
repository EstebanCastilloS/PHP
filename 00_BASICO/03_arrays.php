<?php

//ESCALAR
//$estudiantes = array("Carlos","Esteban","María","Daniel");
$estudiantes = ["Carlos","Esteban","María","Daniel"];

echo $estudiantes[0];

//ARRAY ASOCIATIVO

$tutor=
[
    "nombre"=>"Esteban",
    "apellido"=>"Castillo",
    "edad"=>31
];
echo $tutor["nombre"];

//ARRAY MULTIPLES DIMENSIONES

$tutorn=
[
    "nombre"=>"Carlos",
    "apellido"=>"Gonzales",
    "edad"=>20,
    "cursos"=>["PHP","Python","CSS"]
];
echo $tutor["nombre"];

