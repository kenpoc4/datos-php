<?php

function getTeacher() {
    return 'teacher';   
}

$teacher = 'Bruno';

// Encerramos en {} un objeto complejo para que el miso lenguaje lo trate como tal. 
echo "{${getTeacher()}} enseña php";