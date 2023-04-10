<?php
$mystring = 'abcdfhi';
$findme   = 'a';
$pos = strpos($mystring, $findme);
if ($pos === false) {
    echo "La cadena '$findme' no fue encontrada en la cadena '$mystring'";
} else {
    echo "La cadena '$findme' fue encontrada en la cadena '$mystring'";
    echo " y existe en la posición $pos";
}
?>