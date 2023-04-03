<?php
$nombre = ["EVER",
"LUZ",
"MARTIN",
"JHESICA",
"JUAN PAUL",
"RODRIGO",
"JUAN RONALDO",
"CLAUDIA MARIZOL",
"BORIS",
"YOLA",
"ROSSE MARY"
];
//Muestra elemento del vector
echo $nombre[7],"<br>";
//Muestra la posicion del element del vector
$clave = array_search("CLAUDIA MARIZOL",$nombre);
echo $clave;

// conectar la clave de elemento del verctor
echo "<br> La cantidad elemento es: ",count($nombre);
?>