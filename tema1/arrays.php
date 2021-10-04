<?php

$names = ["Carlos","Saul","Andrea","Victor"];
$extendedNames = [
    ["id" => 1, "nombre" => "Carlos",   "edad" =>33],
    ["id" => 2, "nombre" => "Saúl",     "edad" =>20],
    ["id" => 3, "nombre" => "Andrea",   "edad" =>23],
    ["id" => 4, "nombre" => "Nerea",    "edad" =>19]
];
$numbers = [1,50,20,30,40,550,49, 8, 999, 1001];
$orderedNames = $names;
asort($orderedNames);
$reversedArray = $names;
arsort($reversedArray);
$myName = "Carlos";
$result = array_sum($numbers);
$arrayByColumm;

echo "<h1>Carlos Ramos Iserte: Arrays</h1>";
echo "<h4> Nombres </h4>";
echo "La cantidad de nombres totales del array es ".count($names)."<br>";
echo "Los nombres almacenados son: ".implode(" ",$names)."<br>";
echo "Los nombres por orden alfabético son: ".implode(", ",$orderedNames)."<br>";
echo "Los nombres en orden inverso son: ".implode(" ",$reversedArray)."<br>";
echo 'Me llamo "'.$myName.'" y en el array original mi nombre está en '.(array_search($myName,$names)+1)."ª posición"."<br>";
echo "<h4>Array asociativo</h4>";
print_r($extendedNames);

echo createTable($extendedNames);

echo "<h4>Array Indexado</h4>";
$arrayByColumm = array_column($extendedNames, "nombre");
print_r($arrayByColumm);

echo "<h4>Suma de numeros</h4>";
echo $result."<br>";





function createTable ($array) :string {
    $table = "<h4>Tabla</h4><table border =1>";
    
    $counter = 0;
    foreach ($array as $value) {
        $table .= "<tr>";
        foreach ($value as $field => $value) {
            $table .= "<td>$field</td>";
            $counter++;
        }
        $table .= "</tr>";                    
        if ($counter!=0){
                break;
        }        
    }
    
    foreach ($array as $field) {
        $table .= "<tr>";
        foreach ($field as $value) {
            $table .= "<td>$value</td>";
        }
        $table .= "</tr>";                
    }
    $table .= "</table>";

    return $table;
}

?>