<?php
$array = array(1, 2, 3, 4, 5);
$string = "Hola bienvenido a tew_500";
$number = 12345;
if (is_array($array)) {
echo "La variable\$matriz es una matriz.\n<br>";
}
if (!is_array($string)) {
echo "La variable \$cadena no es una matriz.\n<br>";
}
if (!is_array($number)) {
echo "La variable \$número no es una matriz.\n<br>";
}