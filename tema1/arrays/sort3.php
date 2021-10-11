<?php
 
$associativeArray = array("Carlos"=>"Ramos","Saul" => "Pacheco", "Andrea" => "Martín", "Aaron" => "Ruíz");
 
function fixOrder($value1, $value2) {
   if (iconv_strlen($value1) == iconv_strlen($value2)) {
       return 0;
   }
 
   return (iconv_strlen($value1) < iconv_strlen($value2)) ? -1 : 1;
}
 
uasort($associativeArray,'fixOrder');
print_r($associativeArray);
 
?>