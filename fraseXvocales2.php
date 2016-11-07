<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function esVocal($frase) {
    switch ($frase) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            return TRUE;
    }
    return FALSE;
}

$frase = $_POST ['frase'];
$totalvocales = 0;

 for ($i = 0; $i < strlen($frase); $i++) {
   if (esVocal($frase[$i])) {
       $totalvocales++;
   }
}


for ($i=1;$i<=$totalvocales;$i++){
echo "$i <-> $frase <br>\n";
}