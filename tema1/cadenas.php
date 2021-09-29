<?php

$url = "https";
$nombre = $_GET["nombre"]??="";
$nombre = trim($nombre, "/");
$prefijo = $_GET["prefijo"]??="";
$prefixFound = false;


echo "Cantidad de carácteres: ".strlen($url)."<br>";
echo "Mayusculas: ".strtoupper($url)."<br>";
echo "Minusculas: ".strtolower($url)."<br>";

if ($nombre == "") {
    $nombre = "Carlos";
}

$prefixFound = stripos($nombre,$prefijo);

echo "Te llamas ".$nombre;
if ($prefijo!=null) {
    if ($prefixFound===0) {
        echo "Tu nombre empieza por el prefijo";
    } else {
        echo "Tu nombre no empieza por el prefijo";
    }
}


?>