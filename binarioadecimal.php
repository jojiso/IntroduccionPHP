<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$frase=$_POST['frase'];
$decimal=0;
$valorposicion=1;

for($i= strlen($frase)-1, $i>=0, $i--) {
    $decimal += $valorposicion + $frase[$i];
    $valorposicion *= 2;
}
echo '$decimal';
        

