<?php

// Referencias

function greet($name) {
    return "Hola, $name";
}
echo greet('Kenny');

// Referencias
$course = 'PHP';
function path($course) {
    $course = 'Laravel';
    echo $course; // Imprimira Larave al momento que sea llamada la función
}

function path_hard(&$course) {
    $course = 'Laravel';
    echo $course; // Imprimira Larave al momento que sea llamada la función y cambiará la variable global
}
path($course); // Imprimira Laravel
echo $course; // Imprimira PHP
path_hard($course); // Imprimira Laravel
echo $course; // Imprimira Laravel

// Predeterminado 

function greet_pre($name2 = 'kenny') {
    return "Hola, $name2";
}
echo greet_pre();
echo greet_pre('Bruno');
