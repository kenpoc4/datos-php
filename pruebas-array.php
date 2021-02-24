<?php

require __DIR__ . '/app/model/tablas.php';

global $LISTA_DE_PELICULAS;

$lista_de_directores = array_keys($LISTA_DE_PELICULAS);

echo "<pre>";
var_dump($lista_de_directores);
echo "</pre>";

// Eliminando valores
$encontrando_a_michael_bay = array_search("Michael Bay", $lista_de_directores);
unset($lista_de_directores[$encontrando_a_michael_bay]); // Eliminando a Michael Bay

echo "<pre>";
var_dump($lista_de_directores);
echo "</pre>";

// Agregando valores
array_push($lista_de_directores, 'Stanley Kubrick');
echo "<pre>";
var_dump($lista_de_directores);
echo "</pre>";