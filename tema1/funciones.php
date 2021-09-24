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
    $queryEnding= ")</br>";
    $finalQuery ="";


    foreach ($campos as $campo => $valor) {
        $queryAtributes .= "$campo,";
        $queryValues .= ":$campo,";
    }
    $queryAtributes = substr($queryAtributes,0,-1);
    $queryValues = substr($queryValues,0,-1);
    
    $finalQuery = $query.$queryAtributes.$queryValuesText.$queryValues.$queryEnding;

    return $finalQuery;
}

function insertReferencia (&$tabla, &$campos):string {
    $query = "";

    foreach ($campos as $campo => $valor) {
        $query .= "insert into $tabla ($campo, $valor) values (:$campo :$valor)</br>";
    }

    return $query;
}

function update (&$tabla, &$campos, $id) :string{
    $query = "UPDATE $tabla SET nombre=:$campos[nombre], apellidos=:$campos[apellidos] WHERE id = :$campos[id]";

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
echo insertReferencia ($tabla, $campos2);
echo update ($tabla, $campos2, 1);
echo "</br>";
echo $operation(1,2,"+");

?>