<?php

$colors = array('blanco','verde','rojo','azul');

function createColorList($array) {
    echo "<ul>";
        foreach ($array as $value) {
            echo "<li>$value</li>";
        }
    echo "<ul>";
};

echo createColorList($colors);

?>