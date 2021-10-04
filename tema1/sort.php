<?php
$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
$rearrangedArray = ($edades);

echo "<h4>Edad: Ascendente</h4>";
asort($rearrangedArray,1);
print_r($rearrangedArray);

echo "<h4>Nombre: Ascendente</h4>";
ksort($rearrangedArray);
print_r($rearrangedArray);

echo "<h4>Edad: Descendente</h4>";
arsort($rearrangedArray,1);
print_r($rearrangedArray);

echo "<h4>Nombre: Descendente</h4>";
krsort($rearrangedArray);
print_r($rearrangedArray);

?>