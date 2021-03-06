<html>
    <head>
        <title>Listado de Clientes</title>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>    
    <body>
        <div class="container">
            <div class="row bg-info">
             <div class="col-md-2">
                 <b>Codigo Cliente</b>
            </div>
            <div class="col-md-4">
                <b>Nombre del Cliente</b>
            </div>
             <div class="col-md-4">
                 <b>Direccion</b>
            </div>
            <div class="col-md-1">
                <b>Pedidos</b>
            </div>
        </div>

<?php

include "conexion.php";

$sql = <<< SQL
    SELECT idCliente, codCliente, nombreCli, direccion
        FROM cliente
        ORDER BY nombreCli    
SQL;
//echo $sql;

//$sentencia = new mysqli_stmt(); //es opcional
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
$sentencia->bind_result($id, $cod, $nombre, $direccion);
$i=1;
while ($sentencia->fetch()){
    //en $id, $cod, ... estan los valores de los campos
    ?>
        <div class="row <?php echo $i%2==0 ? 'bg-warning':'';?> ">
             <div class="col-md-2">
                <?php echo $cod;?>
            </div>
            <div class="col-md-4">
                    <?php echo $nombre; ?>
            </div>
             <div class="col-md-4">
                <?php echo $direccion;?>
            </div>
            <div class="col-md-1">
                <a href="listado_pedidos.php?idCliente=<?php echo $id;?>">pedidos</a>
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

