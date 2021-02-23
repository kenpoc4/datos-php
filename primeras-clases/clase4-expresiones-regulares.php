<?php

#EXPRESIONES REGULARES
/*
/:  CONTENEDOR
^: INICIO
$: FINAL
-: RANGO
[]: PATRÓN 
{}: CONDICIÓN
*/

$password = '123456';

preg_match( '/^[0-9]{6,9}$/' , $password ); 
// [0-9] -> El patrón establece que solo aceptará numeros del 0 al 9
// {6-9} -> La condición es que el string debe de tener al menos 6 caracteres pero no más de 9
var_dump((boolean) preg_match( '/^[0-9]{6,9}$/' , $password ) ); 