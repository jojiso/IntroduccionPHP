<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$serie = $_POST['serie'];
$vector = explode(":", $serie);
$mayor = $vector[0];
        
foreach ($vector as $elemento) {
    if ($elemento>$mayor)
    {
    $mayor=$elemento;
    }
}
echo "El número mayor es $mayor.";