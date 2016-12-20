<?php

// Crear la conexion

$conexion = new mysqli("localhost", "root","ausias", "neptuno"); 
if ($conexion->connect_errno) { 
    die( "Fallo al contenctar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error); 
}
//datos
$id= $_GET['id'];

$sql = <<<SQL
select idpedido,concat (nombre," ",apellidos) as NombreEmpleado,fechaPedido,cargosD,cargosE
from pedido p ,empleado e
where p.idempleado=e.idEmpleado
and idcliente=$id
SQL;
#echo $sql;

$result = new mysqli_result(); 
//inicializamos objeto resultado de consulta SELECT
?>
<html>
<head>
 <title>Pedidos</title>
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
       <th>Pedido</th>
       <th>Nombre Empleado</th>
        <th>Fecha Pedido</th>
        <th>Cargos D</th>
        <th>Cargos E</th>
     </tr>
   </thead>
      <tbody>
   <?php
if ($result = $conexion->query($sql)) { 
	/*Si queremos mostrar lo que nos ha devuelto la consulta SELECT deberemos pasar por todos las filas devueltas */
	while ($fila = $result->fetch_array()){
                $idpedido= $fila['idpedido'];
		$NombreEmpleado= $fila['NombreEmpleado'];
                $fechaPedido= $fila['fechaPedido'];
                $cargosD= $fila['cargosD'];
                $cargosE= $fila['cargosE'];
              ?>
      <tr>
       <td><?php echo $idpedido;?></td>
       <td><?php echo $NombreEmpleado;?></td>
       <td><?php echo $fechaPedido;?></td>
       <td><?php echo $cargosD;?></td>
       <td><?php echo $cargosE;?></td>
      </tr>

 <?php
               #echo $idpedido."<br>";
      	}
 $resultado->free();
}
?>
</tbody>
</body>
 </html>
 <?php

$conexion->close();