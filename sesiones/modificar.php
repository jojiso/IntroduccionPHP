
<html>
<head>
  <title>Modificar Producto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
        <form class="form-horizontal" role="form" method="post" action="actualizar.php">
	<div class="form-group">
<?php

include "conexion.php";
$idProducto = $_GET['idProducto'];
$sql = <<< SQL
   select nombreProd, nombreProv, nombreCat,cantidadUnidad,precioD,precioE,existencias
from producto p,proveedor pv, categoria c
where p.idProveedor= pv.idProveedor and
	p.idCategoria = c.idCategoria and 
	idProducto=?   
SQL;
//echo $sql;

//$sentencia = new mysqli_stmt(); //es opcional
$sentencia = $conexion->prepare($sql);
$sentencia->bind_param("i", $idProducto);

if (!$sentencia){
    die("Error al preparar: ");
}
//ya está preparada
$sentencia->execute();
if ($sentencia->errno){
    die("Error al ejecutar: ".$sentencia->error);
}
//ejecutada con éxito
$sentencia->bind_result($nombreProd, $nombreProv, $nombreCat, $unidades, $precioD, $precioE, $existencias);
while ($sentencia->fetch()){
  }
?>
		<label for="nombre" class="col-xs-2 control-label">nombre del Producto</label>
		<div class="col-md-3">
			<input type="text" class="form-control" id="nombreProd" name="nombreProd" value="<?php echo $nombreProd; ?>">
		</div>
	</div>

  <div class="form-group">
  <label for="proveedor" class="col-xs-2 control-label">proveedor:</label>
  <div class="col-md-3">
  <select class="form-control" id="proveedor" name="nombreProv" value="<?php echo $nombreProv; ?>">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>
  </div>
  <div class="form-group">
  <label for="categoria" class="col-xs-2 control-label">categoria:</label>
  <div class="col-md-3">
  <select class="form-control" id="categoria" name="nombreCat" value="<?php echo $nombreCat; ?>">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>
  </div>
	<div class="form-group">
		<label for="unidades" class="col-xs-2 control-label">Unidades</label>
		<div class="col-md-3">
			<input type="text" class="form-control" id="unidades" name="unidades" value="<?php echo $unidades; ?>">
		</div>
	</div>
            <div class="form-group">
		<label for="precioD" class="col-xs-2 control-label">Precio $</label>
		<div class="col-md-3">
			<input type="text" class="form-control" id="precioD" name="precioD" value="<?php echo $precioD; ?>">
		</div>
	</div>
            <div class="form-group">
		<label for="precioE" class="col-xs-2 control-label">Precio €</label>
		<div class="col-md-3">
			<input type="text" class="form-control" id="precioE" name="precioE" value="<?php echo $precioE; ?>">
		</div>
	</div>
            <div class="form-group">
		<label for="existencias" class="col-xs-2 control-label">Existencias</label>
		<div class="col-md-3">
			<input type="text" class="form-control" id="existencias" name="existencias" value="<?php echo $existencias; ?>">
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-2 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Enviar" class="btn btn-primary">
		</div>
	</div>
        </form>


</body>
</html>


