<?php

$temperatures = "5,7,10,40,30,13,15,6,25,26,8,1,3";
$counter = 0;
$colder ="";
$hotter ="";

$tempArray = explode(",",$temperatures);
echo "<h4>Las 5 temperaturas más frias han sido:</h4>";
sort($tempArray);
foreach ($tempArray as $value) {
    $colder .= $value."º, ";
    $counter++;
    if ($counter==5) {
        break;
    }
}

$colder = substr($colder,0, -2);
echo $colder;

echo "<h4>Las 5 temperaturas más cálidas</h4>";
rsort($tempArray);

foreach ($tempArray as $value) {
    $hotter .= $value."º, ";
    $counter--;
    if ($counter==0) {
        break;
    }
}
$hotter = substr($hotter,0, -2);
print_r($hotter);

?>