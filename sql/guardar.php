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
// OBTENER LOS DATOS DEL USUARIO


$cliente = $conexion->real_escape_string($_POST['cliente']);
$direccion= $conexion->real_escape_string($_POST['direccion']);           
$ciudad = $conexion->real_escape_string($_POST['ciudad']);
$cpostal = $conexion->real_escape_string($_POST['cpostal']);
$telefono = $conexion->real_escape_string($_POST['telefono']);
$fax = $conexion->real_escape_string($_POST['fax']);
$id = $conexion->real_escape_string($_POST['id']);

$sql = <<<SQL
   update cliente
   set nombreCli= '$cliente',direccion='$direccion',ciudad= '$ciudad',cpostal='$cpostal',telefono='$telefono',fax='$fax'
   WHERE idCliente= '$id'
SQL;
//echo $sql;
//$conexion->query($sql);
  if ($conexion->query($sql)){
  echo 'Actualización realizada';
}
else 
{
  echo 'Error al guardar los datos';
}
