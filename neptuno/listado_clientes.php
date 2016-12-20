

<?php
session_start();
$_SESSION['titulo']='Listado de Clientes';
include "conexion.php";
include "cabecera.php";
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
             <div class="col-md-1">
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
include("pie.php");

?>

