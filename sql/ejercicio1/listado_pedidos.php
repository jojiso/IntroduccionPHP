<html>
    <head>
        <title>Listado de Pedidos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
              <div class="row bg-info">
             <div class="col-md-1">
                <b>Pedido</b>
            </div>
            <div class="col-md-3">
                   <b>Empleado</b>
            </div>
             <div class="col-md-2">
                <b>Fecha del Pedido</b>
            </div>
            <div class="col-md-2">
                 <b>Cargos</b>
            </div>
            <div class="col-md-2">
                <b>Detalles del pedido</b>
            </div>
        </div>
<?php

include "conexion.php";

$idCliente = $_GET['idCliente'];

$sql = <<< SQL
    SELECT idPedido, concat(nombre," ",apellidos) as empleado, fechaPedido, cargosE 
        FROM pedido p, empleado e 
        WHERE p.idEmpleado=e.idEmpleado 
		  and idCliente = ?
SQL;
//echo $sql;
$sentencia = new mysqli_stmt(); //es opcional
$sentencia = $conexion->prepare($sql);
$sentencia->bind_param("i", $idCliente);

if (!$sentencia){
    die("Error al preparar: ");
}
//ya está preparada
$sentencia->execute();
if ($sentencia->errno){
    die("Error al ejecutar: ".$sentencia->error);
}
//ejecutada con éxito
$sentencia->bind_result($idPedido, $idEmpleado, $fechaPedido, $cargosE);
$i=1;
while ($sentencia->fetch()){
    //en $id, $cod, ... estan los valores de los campos
    ?>
        <div class="row <?php echo $i%2==0 ? 'bg-warning':'';?> ">
             <div class="col-md-1">
                <?php echo $idPedido;?>
            </div>
            <div class="col-md-3">
                    <?php echo $idEmpleado; ?>
            </div>
             <div class="col-md-2">
                <?php echo $fechaPedido;?>
            </div>
            <div class="col-md-2">
                <?php echo $cargosE;?>
            </div>
            <div class="col-md-2">
                <a href="listado_detalle_pedido.php?idPedido=<?php echo $idPedido;?>">detalle pedido</a>
            </div>
        </div>
    <?php
    $i++;
}

$sentencia->close();
$conexion->close();   

?>
        </div>
    </body>
</html>



