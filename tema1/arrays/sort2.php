<?php
 
$temperatures = "5,7,10,40,30,13,15,6,25,26,8,1,3";
$counter = 0;
$colder ="";
$avgTemp="";
$hotter ="";
 
$tempArray = explode(",",$temperatures);
$avgTemp = array_sum($tempArray)/count($tempArray);
echo "<h4>Las 5 temperaturas más frias han sido:</h4>";
$colder = $tempArray;
sort($colder);
$colder = array_slice($colder,0,5);
print_r ($colder);
 
echo "<h4>Las 5 temperaturas más cálidas</h4>";
rsort($tempArray);
print_r($hotter);
$hotter = $tempArray;
rsort($hotter);
$hotter = array_slice($hotter,0,5);
print_r ($hotter);
 
echo "<h4>La temperatura media es: </h4>$avgTemp";
 
?>