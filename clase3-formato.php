<?php

$text = 'PHP es un Lenguaje';
/* 
* Alterar "str"
*/

echo '<h1>Alterar</h1>';

echo strtolower($text); //Convierte el string en minúscula
echo '<br>';
echo strtoupper($text); //Convierte el string en mayúscula
echo '<br>';
echo ucfirst($text); //Convierte el priomer elemento en mayúscula
echo '<br>';
echo lcfirst($text); //Convierte el primer elemento en minúscula
echo '<br>';

/* 
* Remplazar
*/

echo '<h1>Remplazar</h1>';

$slug = str_replace(' ', '-', $text); // str_replace() remplaza todo x por y del string z
echo strtolower($slug);

/* 
* Modificar
*/

echo '<h1>Modificar</h1>';

$code = 39;
echo $code;
echo '<br>';
echo str_pad($code, 8, '#'); // str_pad(x, y, z) hace que x tenga y dígitos y los que hagan falta los llene con z
echo '<br>';
echo str_pad($code, 8, '#', STR_PAD_BOTH); // El parametro adicional STR_PAD_BOTH centra el dato
echo '<br>';
echo str_pad($code, 8, '#', STR_PAD_LEFT); // También podemos justificar nuestro dato cambiando el parámetro STR_PAD_BOTH
echo '<br>';

$html = "<h1>Hola, estoy escribiendo html en php</h1>";
echo $html;
echo strip_tags($html); // strip_tags() elimina toda etiqueta html que encuentre en el string
echo '<br>';
echo '<br>';


$raros = 'Hola es el año 2021, la programación es poesía';
echo $raros;
echo '<br>';
echo strtoupper($raros); // Los caracteres raros no son afectados
echo '<br>';
echo mb_strtoupper($raros); // Ahor sí
