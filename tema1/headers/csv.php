<?php
    $products = [
        ['id'=>0, 'nombre' => "Daga", "precio" => 10],
        ['id'=>1, 'nombre' => "Espada", "precio" => 15],
        ['id'=>2, 'nombre' => "Espadón", "precio" => 50],
        ['id'=>3, 'nombre' => "Hacha", "precio" => 25],
        ['id'=>4, 'nombre' => "Arco", "precio" => 35]        
    ];

    function arrayToCSV ($array) :string {                
        $csv = "";
        $counter = 0;
        foreach ($array as $value) {            
            foreach ($value as $field => $value) {
                $csv .= "$field;";
                $counter++;
            }
            $csv .= "\n";                    
            if ($counter!=0){
                    break;
            }        
        }
        
        foreach ($array as $field) {            
            foreach ($field as $value) {
                $csv .= "$value;";
            }
            $csv .= "\n";                
        }            
        return $csv;
    }

    echo arrayToCSV($products);

    header("Content-Disposition: attachment; filename=productos.csv");

?>