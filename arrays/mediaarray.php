<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$serie = $_POST['serie'];
$vector = explode(":", $serie);
$suma = 0;
$elementos=0;
foreach ($vector as $elemento) {
    $suma += $elemento;
    $elementos++;
}
$media=$suma/$elementos;
echo "La media de los elementos es $media.";
