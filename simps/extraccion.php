<?php

$data = 'Estudio PHHP';

// echo $data[0];

$post =  "Lorem ipdsum dolor sit amet consectetur adipisicing elit. Earum aut aspernatur, labore facilis laborum dolorem vel ex ipsa necessitatibus ad ullam culpa explicabo eos est quas exercitationem omnis? Corporis, perspiciatis.";
$extract = substr($post, 0,20);

echo"$extract... [ver mas]";




// ---------------------------------------------------------------


$data = "JAVA,PHP,lARAVEL";
$tags = explode(",", $data); // convertir a arrayss
echo"<pre>";
var_dump($tags);

// ---------------------------------------------------------------

$courses = ["javascrip","php","laravel"];
echo implode(',', $courses); //convierte array a string

//---------------------------------------------------------------

$course = "         CURSO DE PHP";
echo "<pre>";
echo trim($course); //trim quita espacios