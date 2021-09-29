<?php

$url = "https";
$nombre = $_GET["nombre"]??="";
$prefijo = $_GET["prefijo"]??="";
$nombre = trim($nombre, "/");

echo "Cantidad de carácteres: ".strlen($url)."<br>";
echo "Mayusculas: ".strtoupper($url)."<br>";
echo "Minusculas: ".strtolower($url)."<br>";

if ($nombre == "") {
    $nombre = "Carlos";
}

if ($prefijo == "") {
    $prefijo = "Sin prefijo";
}

echo "Te llamas ".$nombre;
echo $prefijo;

echo parse_url();




?>