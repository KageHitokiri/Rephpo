<?php
    $message = ["Seguro","que","apruebo","esta","asignatura"];
    $array1 = [];

    function partlist($originalArray, &$array1) {
        for ($i = 0;$i<count($originalArray)-1; $i++) {
    
            $array1 [$i][0]= implode(array_slice($originalArray,0,$i+1)," ");
            $array1 [$i][1]= implode(array_slice($originalArray,$i+1,count($originalArray))," ");
        }
        
    }
    
    partlist($message,$array1);    
    print_r($array1);

?>