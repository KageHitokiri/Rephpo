<?php

$url = "https";
$nombre = $_GET["nombre"];
$nombre = trim($nombre, "/");

echo "Cantidad de carácteres: ".strlen($url)."<br>";
echo "Mayusculas: ".strtoupper($url)."<br>";
echo "Minusculas: ".strtolower($url)."<br>";

if ($nombre == null) {
    $nombre = "Carlos";
}

echo "Te llamas ".$nombre;

echo parse_url();




?>