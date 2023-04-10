<?php

$text   = "\t\tEstas son algunas palabras :) ...  ";
$binary = "\x09Cadena de ejemplo\x0A";
$hello  = "Hola Mundo";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = trim($text);
var_dump($trimmed);

$trimmed = trim($text, " \t.");
var_dump($trimmed);

$trimmed = trim($hello, "juan");
var_dump($trimmed);

$trimmed = trim($hello, 'ronaldo');
var_dump($trimmed);


$clean = trim($binary, "\x00..\x1F");
var_dump($clean);

?>