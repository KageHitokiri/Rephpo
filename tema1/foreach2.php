<?php

$colors = array('blanco'=>'blanco.html','verde'=>'verde.html','rojo'=>'rojo.html','azul'=>'azul.html');

function createColorList($array) {
    echo "<ul>";
        foreach ($array as $colour => $value) {
            echo "<li><a href='$value'>$colour</a></li>";            
        }
    echo "<ul>";
};

echo createColorList($colors);



?>