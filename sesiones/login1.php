<?php

include "conexion.php";

$usuario = $conexion->real_escape_string($_POST['usuario']);
$pwd = $conexion->real_escape_string($_POST['pwd']);

$sql = <<< SQL
    SELECT idCargo
     from empleado
     where usuario = '$usuario' and pass = sha2('$pwd',512)
SQL;

//echo $sql;
$sentencia = new mysqli_stmt(); //es opcional
$sentencia = $conexion->prepare($sql);


if (!$sentencia){
    die("Error al preparar: ");
}
//ya está preparada
$sentencia->execute();
if ($sentencia->errno){
    die("Error al ejecutar: ".$sentencia->error);
}
//ejecutada con éxito
$sentencia->bind_result($cargo);

echo $cargo;

while ($sentencia->fetch()){
    //en $id, $cod, ... estan los valores de los campos
    echo $cargo;
}
$sentencia->close();
$conexion->close();

switch ($cargo) {
    case "1":
        echo '<meta http-equiv="refresh" content="3;URL=representante.php">';
        echo '<a href="representante.php">Pincha aquí si tienes prisa</a>';
        break;
    case "2":
        echo '<meta http-equiv="refresh" content="3;URL=vicepresidente.php">';
        echo '<a href="comercial.php">Pincha aquí si tienes prisa</a>';
        break;
    case "3":
        echo '<meta http-equiv="refresh" content="3;URL=gerente.php">';
        echo '<a href="gerente.php">Pincha aquí si tienes prisa</a>';
        break;
    case "4":
        echo '<meta http-equiv="refresh" content="3;URL=coordinador.php">';
        echo '<a href="coordinador.php">Pincha aquí si tienes prisa</a>';
        break;
    default:
        break;
}
