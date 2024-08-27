<?php

// Alterar a minúscula
$text1 = "PHP es UN LENGUAJE";
echo strtolower($text1);
echo "\n";

// Alterar a mayúscula
$text2 = "PHP es UN LENGUAJE";
echo strtoupper($text2);
echo "\n";

// Alterar a mayúscula solo el primer carácter
$text3 = "PHP es UN LENGUAJE";
$textLower = strtolower($text3);
echo ucfirst($textLower)."\n";

// Alterar a minúscula solo el primer carácter
$text4 = "PHP es UN LENGUAJE";
$textUpper = strtoupper($text4);
echo lcfirst($textUpper);echo "\n";

// Reemplazar
$textLower2 = strtolower($text1);
$slug = str_replace(' ','-', $textLower2);
echo $slug;

$slug2 = str_replace('php','ruby', $textLower2);
echo $slug2;echo "\n";

// Modificación
$code = 39;
// colocar hacia STR_PAD_BOTH, STR_PAD_LEFT & STR_PAD_RIGHT
echo str_pad($code, 8, '#', STR_PAD_BOTH);echo "\n";

// Es una mala práctiva guardar código html en nuestra DB
$textHTML = "<h3>PHP es UN LENGUAJE</h3>";
echo $textHTML;
// Para quitarlas utilizamos strip_tags()
echo strip_tags($textHTML);echo "\n";


$phrase = "Php es un lenguaje bueno para comunicarse con las maquínas";
echo strtolower($phrase); //monobyte
echo mb_strtolower($phrase); //multiobyte