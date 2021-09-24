<?php declare(strict_types=1);

$tabla = "alumnos";
$campos = array("nombre" => "Saúl", "apellidos" => "Pacheco");
$campos2 = array("id" => 1, "nombre" => "Saúl", "apellidos" => "Pacheco");
$num1;
$num2;
$operator ="";

function insert ($tabla, $campos) :string {
    $query = "insert into $tabla (";
    $queryAtributes ="";
    $queryValuesText =") values (";
    $queryValues ="";    
    $finalQuery ="";


    foreach ($campos as $campo => $valor) {
        $queryAtributes .= "$campo,";
        $queryValues .= ":$campo,";
    }
    $queryAtributes = substr($queryAtributes,0,-1);
    $queryValues = substr($queryValues,0,-1);
    
    $finalQuery = $query.$queryAtributes.$queryValuesText.$queryValues.")</br>";

    return $finalQuery;
}

function insertReferencia (&$tabla, &$campos):string {
    $query = "insert into tabla (campos) values (valores)";
    $fixedQuery ="";        

    foreach ($campos as $campo => $valor) {
        $queryAtributes .= "$campo,";
        $queryValues .= ":$campo,";
    }
    $queryAtributes = substr($queryAtributes,0,-1);
    $queryValues = substr($queryValues,0,-1);
    
    $fixedQuery = str_replace("tabla",$tabla,$query);
    $fixedQuery = str_replace("campos",$queryAtributes,$fixedQuery);
    $fixedQuery = str_replace("valores",$queryValues,$fixedQuery);
    $fixedQuery .= "</br>";

    return $fixedQuery;
}

function update (&$tabla, &$campos, $columna) :string{
    $queryStart = "UPDATE $tabla SET ";    
    $sentence ="";
    $queryWhere ="";
    $getFieldName = array_key_first($campos);
    $finalQuery ="";
    $i = 0;

    foreach ($campos as $campo => $value) {
        if ($i ==0) {
            
        } else {
            $sentence .="$campo"."=:".$campo.", ";            
        }
        $i++;
        
    }

    $sentence = substr($sentence,0,-2);
    $queryWhere = " WHERE ".$getFieldName." = :".$getFieldName."</br>";

    $finalQuery = $queryStart.$sentence.$queryWhere;

    $query = "UPDATE $tabla SET nombre=:$campos[nombre], apellidos=:$campos[apellidos] WHERE ".$getFieldName." = :".$getFieldName;



    return $finalQuery;
}

$operation = function ($num1, $num2, $operator):string {
    $operation ="";

    if ($operator === "+") {        
        $operation = "$num1"."+"."$num2 =".($num1+$num2);
        
        return $operation;
    } elseif ($operator === "-") {
        $operation = "$num1"."-"."$num2 =".($num1-$num2);
        
        return $operation;
    } elseif ($operator === "*") {
        $operation = "$num1"."*"."$num2 =".($num1*$num2);
        
        return $operation.$result;
    } elseif ($operator === "/") {
        $operation = "$num1"."/"."$num2 =".($num1/$num2);
        
        return $operation;
    } else {
        return "Operación no válida";
    }    
};

echo insert ($tabla, $campos);
echo insertReferencia ($tabla, $campos);
echo update ($tabla, $campos2,0);
echo $operation(1,2,"-");

?>