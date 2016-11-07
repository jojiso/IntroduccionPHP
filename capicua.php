<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$frase = $_POST['frase'];

$esPalindroma = TRUE; //verdadero si es palindroma y falso en caso contrario

$ultimaLetra = strlen($frase) - 1;

$i = 0;
while ($i <= $ultimaLetra) {
    echo $frase[$i],'-',$frase[$ultimaLetra - $i],$i;
    if ($frase[$i] != $frase[$ultimaLetra - $i]) {
        $esPalindroma = FALSE;
        echo $frase[$i];
    }
    $i++;
    echo $i,' ',$ultimaLetra;
}

echo "la frase $frase $esPalindroma ";
if ($esPalindroma) {
    echo "es palindroma";
} else {
    echo "no es palindroma";
}    
