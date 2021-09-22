<?php declare(strict_types=1);

$tabla = "alumnos";
$campos = array("id" => 1, "nombre" => "Saúl", "apellidos" => "Pacheco");
$num1;
$num2;
$operator ="";

function insert ($tabla, $campos) :string {
    $query = "";
    
    foreach ($campos as $campo => $valor) {
        $query .= "insert into $tabla ($campo, $valor) values (:$campo :$valor)</br>";
    }
    
    return $query;
}

function insertReferencia (&$tabla, &$campos):string {
    $query = "";

    foreach ($campos as $campo => $valor) {
        $query .= "insert into $tabla ($campo, $valor) values (:$campo :$valor)</br>";
    }

    return $query;
}

function update (&$tabla, &$campos, $id) :string{
    $query ="";
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
echo insertReferencia ($tabla, $campos);
echo update ($tabla, $campos, 1);
echo "</br>";
echo $operation(1,2,"+");

?>