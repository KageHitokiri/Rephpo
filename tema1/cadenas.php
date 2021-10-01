<?php

$url = "http://username:password@hostname:9090/path?arg=value";
$nombre = $_GET["nombre"]??="";
$nombre = trim($nombre, "/");
$prefijo = $_GET["prefijo"]??="";
$prefixFound = false;
$aCounter = 0;
$modifiedName;
$aPosition = 0;

echo "<b>Carácteres: </b><br>";
echo "Cantidad de carácteres: ".strlen($nombre)."<br>";
echo "Mayusculas: ".strtoupper($nombre)."<br>";
echo "Minusculas: ".strtolower($nombre)."<br>";

if ($nombre == "") {
    $nombre = "Carlos";
}

$prefixFound = stripos($nombre,$prefijo);

echo "Te llamas ".$nombre." <br>";
if ($prefijo!=null) {
    if ($prefixFound===0) {
        echo "Tu nombre empieza por el prefijo<br>";
    } else {
        echo "Tu nombre no empieza por el prefijo<br>";
    }
}

$aCounter = 'La cantidad total de letras "a" del nombre es: '.substr_count(strtoupper($nombre), "A")."<br>";
$modifiedName = 'Modificamos el nombre original, cambiando las letras "o" por 0s y el resultado es: '.str_ireplace("o",0,$nombre)."<br>";

$aPosition = stripos($nombre, "a");

echo "<br><b> Modificaciones en el nombre </b><br>";
echo $aCounter;
echo $modifiedName;

if (!is_int($aPosition)) {
    echo '"'.$nombre.'" carece de la letra "A"';
} else {
    echo 'En el nombre "'.$nombre.'" la letra "A" aparece por primera vez en la posición '.($aPosition+1);
}
echo  "<br>";

echo "<br> <b>ParseURL :</b><br>";
echo "Protocolo: ".parse_url($url, PHP_URL_SCHEME)."<br>";
echo "Nombre de usuario: ".parse_url($url, PHP_URL_USER)."<br>";
echo "Ruta: ".parse_url($url, PHP_URL_PATH)."<br>";
echo "Argumentos: ".parse_url($url, PHP_URL_QUERY)."<br>";

?>