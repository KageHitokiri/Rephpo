<?php
    $productID = $_GET['id']??="5";
    $products = [
        ['id'=>0, 'nombre' => "Daga", "precio" => 10],
        ['id'=>1, 'nombre' => "Espada", "precio" => 15],
        ['id'=>2, 'nombre' => "Espadón", "precio" => 50],
        ['id'=>3, 'nombre' => "Hacha", "precio" => 25],
        ['id'=>4, 'nombre' => "Arco", "precio" => 35]        
    ];

    if (array_key_exists($productID,$products)) {
        echo "Está";
    } else {
        http_response_code(404);
        echo "<h1>ERROR 404</h1>";
    }
    
?>