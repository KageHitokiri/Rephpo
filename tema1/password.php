<?php

function randomPass($upperQuantity, $lowerQuantity, $numericQuantity, $otherQuantity) {
    $password = [];    
    $uppers = [];
    $lowers = [];
    $numbers = [];
    $others = [];
        
    for ($i = 0; $i<$upperQuantity;$i++){
        $uppers[$i] = chr(rand(65,90));
    }
    for ($i = 0; $i<$lowerQuantity;$i++){
        $lowers[$i] = chr(rand(97,122));
    }
    for ($i = 0; $i<$numericQuantity;$i++){
        $numbers[$i] = chr(rand(48,57));
    }
    for ($i = 0; $i<$otherQuantity;$i++){
        $others[$i] = chr(rand(33,47));
    }

    $password = array_merge($uppers,$lowers,$numbers,$others);
    shuffle($password);
    $password = implode($password,"");
    
    print_r($password);

}

echo randomPass(5,7,3,4);

?>