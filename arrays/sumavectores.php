<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$v = array(1=>'90',30=>'2',e=>'99',hola=>'43');
$suma=0;
foreach ($v as $valor) {
    $suma = $suma+$valor;
}
unset($valor);
echo "La suma del vector asociativo es $suma.";
