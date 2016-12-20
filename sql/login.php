<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Crear la conexion

$conexion = new mysqli("localhost", "root","ausias", "neptuno"); 
if ($conexion->connect_errno) { 
    die( "Fallo al contenctar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error); 
}
#echo "Conectado a la base de datos"."<br>";

// OBTENER LOS DATOS DEL USUARIO

$usuario = $conexion->real_escape_string($_POST['usuario']);
$pass = $conexion->real_escape_string($_POST['pass']);

$sql = <<<SQL
   select *
   from cliente 
   WHERE codCliente = '$usuario' and pass = md5('$pass')
SQL;
// echo $sql;
$validado = FALSE; 
$result = new mysqli_result(); 
//inicializamos objeto resultado de consulta SELECT
if ($result = $conexion->query($sql) and $result->num_rows==1) { 
	/*Si queremos mostrar lo que nos ha devuelto la consulta SELECT deberemos pasar por todos las filas devueltas */
	while ($fila = $result->fetch_array()){
                $validado = TRUE;
                $id= $fila['idCliente'];
		$codCliente= $fila['codCliente'];
                $nombreCli= $fila['nombreCli'];
                $direccion= $fila['direccion'];
                $ciudad= $fila['ciudad'];
                $cpostal= $fila['cpostal'];
                $telefono= $fila['telefono'];
                $fax= $fila['fax']; 
               
      	}
        
}

if ($validado == false){
   echo "Login Incorrecto";
   die;
}

$result->free();
$conexion->close();
?>
<form action="guardar.php" method="post">
            Actualice su informacion de Cliente<br>
            Cliente: <input type="text" name="cliente" value="<?php echo $nombreCli;?>"><br>
            Direccion: <input type="text" name="direccion" value="<?php echo $direccion;?>"><br>
            Ciudad: <input type="text" name="ciudad" value="<?php echo $ciudad;?>"><br>
            C.Postal: <input type="text" name="cpostal" value="<?php echo $cpostal;?>"><br>
            Telefono: <input type="text" name="telefono" value="<?php echo $telefono;?>"><br>
            Fax: <input type="text" name="fax" value="<?php echo $fax;?>"><br>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="submit">
</form>
