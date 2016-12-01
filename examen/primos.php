<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function esprimo($num) {
    $divisor = 0;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $divisor++;
        }
    }
    if ($divisor > 0) {
        return FALSE; //no es primo, he encontrado un divisor
    } else {
        return TRUE; //no tiene divisor
    }
}
for ($i=1;$i<=100;$i++){
    if (esprimo($i)){
        echo "$i <br>";
    }
}