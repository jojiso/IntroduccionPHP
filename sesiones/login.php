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
$validado=0;
$sentencia->bind_result($cargo);
while ($sentencia->fetch()){
    $validado=1;
}
if ($validado==0){      
//echo '<meta http-equiv="refresh" content="0;URL=login.html">';
  //    echo  '<a href="login.html">Login Incorrecto</a>';  
 
  header('location:login_error.html');
}
    
 switch ($cargo) {
    case "1":
         header('location:representante.php');
        //echo '<meta http-equiv="refresh" content="3;URL=representante.php">';
        //echo '<a href="representante.php">Pincha aquí si tienes prisa</a>';
        break;
    case "2":
        header('location:vicepresidente.php');
        //echo '<meta http-equiv="refresh" content="3;URL=vicepresidente.php">';
        //echo '<a href="comercial.php">Pincha aquí si tienes prisa</a>';
        break;
    case "3":
        header('location:gerente.php');
        //echo '<meta http-equiv="refresh" content="3;URL=gerente.php">';
        //echo '<a href="gerente.php">Pincha aquí si tienes prisa</a>';
        break;
    case "4":
        header('location:coordinador.php');
        //echo '<meta http-equiv="refresh" content="3;URL=coordinador.php">';
        //echo '<a href="coordinador.php">Pincha aquí si tienes prisa</a>';
        break;
    default:
        break;
}    


$sentencia->close();
$conexion->close();