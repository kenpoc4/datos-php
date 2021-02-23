<?php

// Array simple
$courses = ['javasript', 'laravel', 'php', 'vuejs'];

echo "<pre>";
var_dump($courses);
echo "</pre>";

echo $courses[0];

// Array complejo

$tecnologias = [
    'frontend'  =>  'javascript',
    'framework' =>  'Laravel',
    'backend'   =>  'PHP'
];

echo "<pre>";
var_dump($tecnologias);
echo "</pre>";

foreach($tecnologias as $key => $tecnologia) {
    echo "$tecnologia: $key <br>";
}

foreach($tecnologias as $tecnologia) {
    echo "$tecnologia <br>";
}

function upper($tecnologia, $key) {
    echo strtoupper($tecnologia). ": $key <br>";
}
array_walk($tecnologias, 'upper');

/**
 * Funciones propias de PHP para el manejo de arrays
 */
array_key_exists('frontend', $tecnologias); // Revisará si en el array $tecnologias existe la key "frontend"

in_array('javascript', $tecnologias); // Revisa si 'javascript' existe en el array $tecnologias

array_keys($tecnologias); // Coloca en un array solo las keys del array $tecnologias

array_values($tecnologia); // Coloca en un array solo los valores del array $tecnologias

sort($courses); // Ordena de tamaño más pequeño al más grande
rsort($courses); // Ordena de tamaño más grande al más pequeño
ksort($courses); // Ordena por medio de las keys
krsort($courses); // Ordena por medio de las llaves pero de manera inversa

array_chunk( $courses, 3 ); // Divide un array en sub-arrays cada 3 elementos del array $courses

//array_shift( $courses ); // Elimina el primer dato del array y lo retorna
//array_pop( $courses ); // Elimina el último dato del array y lo retorna
//array_unshift( $courses ); // Agrega el primer dato al array 
//array_push( $courses ); // Agrega el último dato al array

array_flip($courses); // Intercambia los valores por las keys

echo "<pre>";
var_dump( array_pop( $courses ) );
var_dump($courses);
echo "</pre>";

