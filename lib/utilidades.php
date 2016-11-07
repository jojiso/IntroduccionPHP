<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function esVocal($letra){
   switch ($letra) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            return true;
    } 
    return false;
}


/*
 * Función que recibe un string y devuelve el número
 * de vocales que tiene
 */

function cuentaVocales($unafrase){
    $vocales = 0;
    for ($i=0; $i<strlen($unafrase);$i++){
        if (esVocal($unafrase[$i])) {
            $vocales++;
        }
    }
    return $vocales;
}

function sustituyeLetra($frase, $letra) {
    $nuevaFrase="";
    for ($i = 0; $i < strlen($frase); $i++) {
        if (esVocal($frase[$i])) {
            $nuevaFrase .= $letra;
        } else {
            $nuevaFrase .= $frase[$i];
        }
        //pa ver
        //echo $nuevaFrase."<br>";
    }
    return $nuevaFrase;
}