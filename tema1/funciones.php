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

function update (&$tabla, &$campos, $searchField, $idValue) :string{
    $query = "UPDATE $tabla SET ";
    
    $query = "UPDATE $tabla SET nombre=:$campos[nombre], apellidos=:$campos[apellidos] WHERE $searchField = :$idValue";

    return $query;
}

$operation = function ($num1, $num2, $operator) {
    
    if ($operator === "+") {
        return $num1 + $num2;
    } elseif ($operator === "-") {
        return $num1 - $num2;
    } elseif ($operator === "*") {
        return $num1 * $num2;
    } elseif ($operator === "/") {
        return $num1 / $num2;
    } else {
        return "Operación no válida";
    }    
};

echo insert ($tabla, $campos);
echo insertReferencia ($tabla, $campos);
echo update ($tabla, $campos2);
echo "</br>";
echo $operation(1,2,"+");

?>