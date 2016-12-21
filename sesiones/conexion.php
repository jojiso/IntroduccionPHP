<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "config.php";

$conexion = new mysqli($host,$user,$pass,$database);

if($conexion->connect_errno){
    die("Depuración: Error de conexión ".$conexion->connect_error);
}
$conexion->set_charset("utf8");

//Nos hemos conectado a neptuno.
//echo "Todo bien";