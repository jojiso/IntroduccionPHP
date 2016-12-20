<?php

$conexion = new mysqli("localhost", "root","ausias", "neptuno");

if ($conexion->connect_errno) {
   die( "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error);
}

$sql = <<< SQL
   SELECT idCliente,codCliente,nombreCli
    from cliente
SQL;
$conexion->set_charset("utf8");
$resultado = new mysqli_result();
?>
<html>
<head>
 <title>Clientes</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <table class="table table-striped">
   <thead>
     <tr>
       <th>Codigo Cliente</th>
       <th>Nombre Cliente</th>
        <th>Pedidos</th>
     </tr>
   </thead>
      <tbody>
   <?php
if ($resultado = $conexion->query($sql)) {
while ($fila = $resultado->fetch_array()){
                $id= $fila['idCliente'];
		$codCliente= $fila['codCliente'];
                $nombreCli= $fila['nombreCli'];
               ?>
      <tr>
       <td><?php echo $codCliente;?></td>
       <td><?php echo $nombreCli;?></td>
       <td> <a href="pedidoscliente.php?id=<?php echo $id;?>">Enlace a los pedidos</a></td>
     </tr>

 <?php
}
$resultado->free();
}
?>
</tbody>
</body>
 </html>
 <?php

$conexion->close();