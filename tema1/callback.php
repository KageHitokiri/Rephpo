<?php
    $words = ["Esto","es","una","prueba"];
    $minmaxArray;    

    function lenCount($value) {
        return iconv_strlen($value);
    }

    $minmaxArray = array_map(lenCount,$words);
    echo "El valor mínimo es: ".min($minmaxArray)."<br>Y el valor máximo es: ".max($minmaxArray);

?>