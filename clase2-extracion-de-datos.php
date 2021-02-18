<?php

// Al especificar en [] un string, este extrae el caracter pedido.
$data = 'Estudio php';
echo $data[0];

// La función substr(z, x, y) nos trae los valores desde x hasta y de z string
$post = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam earum expedita veniam voluptates ab! Fugiat ipsum voluptatibus officia, maxime corrupti repellat atque aperiam, porro minima perspiciatis hic asperiores officiis nulla?';
$extract = substr($post, 0, 20);

echo "$extract... [ver más]";

// Con la función explode(x, y) comvertimos en un array el string y a cada x separación
$data2 = 'javascript, php, laravel';
$tags = explode(', ', $data2);

echo '<pre>';
    var_dump($tags);
echo '</pre>';


// Con la función implode(x, y) convertimos un array y en un string separados por x parametro
$cursos = ['javascript', 'php', 'laravel'];
echo implode(', ', $cursos);


// Trim elimina los espacios de r y l, también se puede agregar el lado al inicios de la función si solo se quiere eliminar los espacios de un solo lado
$cursos_espacios = '     Cursos php      ';
$cursos_sin_espacios = trim($cursos_espacios);
echo '<pre>';
echo "Quiero aprender $cursos_espacios, y otro texto";
echo '<br>';
echo "Quiero aprender $cursos_sin_espacios, y otro texto";
echo '</pre>';