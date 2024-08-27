<?php

//valores
function greet($name){
    return"hola $name";
}

echo greet ('A');

//references
$course = 'PHP';
function path($course){
    $course = 'laravel';
    echo $course;
}

path($course);
echo $course;

function saludo($name = 'user'){
    return "saludos $name";
}

echo saludo();