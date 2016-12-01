<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function nfactorial($numero){
    $factorial=1;
    for($i=1;$i<=$numero;$i++){
        $factorial=$factorial*$i;
    }
    return "El factorial de $numero es $factorial";
}

$numero=$_POST['numero'];
factorial($numero);

/*
function factorial($num){
    if ($num==0){
        return 1;
    } else {
        return $num*factorial($num-1);
    }
}
function factorial2($num){
    $fac = 1;
    for($i=2;$i<=$num;$i++){
        $fac=$fac*$i;
    }
    return $fac;
}
 * 
 *  */