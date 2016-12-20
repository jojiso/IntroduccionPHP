
<?php
session_start();
$_SESSION['titulo']='Listado de Pedidos';
include "conexion.php";
include "cabecera.php";

$idCliente = $_GET['idCliente'];

$sql = <<< SQL
    SELECT idPedido, idEmpleado, fechaPedido, cargosE 
        FROM pedido 
        WHERE idCliente = ? 
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
            <div class="col-md-1">
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

include ("pie.php");
?>




