<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
        <form class="form-horizontal" role="form" method="post" action="login1.php">
	<div class="form-group">
		<label for="nombre" class="col-xs-2 control-label">nombre del Producto</label>
		<div class="col-md-3">
			<input type="text" class="form-control" id="nombreProd" name="nombreProd" value="">
		</div>
	</div>

  <div class="form-group">
  <label for="proveedor" class="col-xs-2 control-label">proveedor:</label>
  <div class="col-md-3">
  <select class="form-control" id="proveedor">
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
  <select class="form-control" id="categoria">
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
			<input type="text" class="form-control" id="unidades" name="unidades" value="">
		</div>
	</div>
            <div class="form-group">
		<label for="precioD" class="col-xs-2 control-label">Precio $</label>
		<div class="col-md-3">
			<input type="text" class="form-control" id="precioD" name="precioD" value="">
		</div>
	</div>
            <div class="form-group">
		<label for="precioE" class="col-xs-2 control-label">Precio €</label>
		<div class="col-md-3">
			<input type="text" class="form-control" id="precioE" name="precioE" value="">
		</div>
	</div>
            <div class="form-group">
		<label for="existencias" class="col-xs-2 control-label">Existencias</label>
		<div class="col-md-3">
			<input type="text" class="form-control" id="existencias" name="existencias" value="">
		</div>
	</div>
	
        </form>


</body>
</html>