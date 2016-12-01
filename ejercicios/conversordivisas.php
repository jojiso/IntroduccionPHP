<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$cantidad = $_POST["cantidad"];
$origen = $_POST["origen"];
$destino = $_POST["destino"];

$cambio = array ("euro"=>1,"dolar"=>1.089,"libra"=>0.89,"yuan"=>7.366,"rublo"=>67.644);

foreach ($destino as $destinos) {
 $valoreuros=$cantidad/$cambio[$origen];
 $conversion=$valoreuros*$cambio[$destino];
 echo "$conversion $destino; ";
}