<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$serie = $_POST['serie'];
$vector = explode(":", $serie);
$suma = 0;
foreach ($vector as $elemento) {
    $suma += $elemento;
}
echo "La suma de los elementos es $suma.";