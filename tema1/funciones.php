<?php

$tabla = "alumnos";
$campos = array("nombre" => "Saúl", "apellidos" => "Pacheco");


function insert ($campos) {
    $query = "";
    
    foreach ($campos as $campo => $valor) {
        $query .= "insert into ($campo, $valor) values (:$campo :$valor)</br>";

    }
    
    return $query;


}

echo insert ($campos);


?>