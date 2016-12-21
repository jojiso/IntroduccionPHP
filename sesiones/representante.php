<html>
    <head>
        <title>Listado de Productos</title>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>    
    <body>
        <div class="container">
            <div class="col-md-10">
                 <b>Nombre del Producto</b>
            </div>
            <div class="col-md-2">

        </div>
        </div>
        <div class="container">
            <div class="row bg-info">
             <div class="col-md-3">
                 <b>Nombre del Producto</b>
            </div>
            <div class="col-md-2">
                <b>Cantidad</b>
            </div>
             <div class="col-md-2">
                 <b>Precio Dolares</b>
            </div>
                <div class="col-md-2">
                 <b>Precio Euros</b>
            </div>
            <div class="col-md-1">
                <b>Existencias</b>
            </div>
        </div>

<?php

include "conexion.php";
$sql = <<< SQL
    SELECT nombreProd, cantidadUnidad, precioD, precioE, existencias
        FROM producto    
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
$sentencia->bind_result($nombreProd, $unidades, $precioD, $precioE, $existencias);
$i=1;
while ($sentencia->fetch()){
    //en $id, $cod, ... estan los valores de los campos
    ?>
        <div class="row <?php echo $i%2==0 ? 'bg-warning':'';?> ">
             <div class="col-md-3">
                <?php echo $nombreProd;?>
            </div>
            <div class="col-md-2">
                    <?php echo $unidades; ?>
            </div>
             <div class="col-md-2">
                <?php echo $precioD;?>
            </div>
            <div class="col-md-2">
                <?php echo $precioE;?>
            </div>
            <div class="col-md-1">
               <?php echo $existencias;?>
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