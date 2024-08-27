<?php

//esta seria la manera convencional de hacer una funcion
// function greet($name){
// }

//se utilizan para las variables que requieren logcia 
$greet = function ($name){
    return "HOLA, $name";
};

echo$greet("A");



function saludo(Closure $lang, $name){
    return $lang($name);
}

$es = function($name){
    return "hola,$name";
};

$en = function($name){
    return "hi ,$name";
};

echo saludo($en, "A");