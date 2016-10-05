<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

        
include 'lib/utilidades.php';
     
$frase = $_POST ['frase'] ;  

function cambiaVocales [$frase, $vocal] {
    switch ($vocales[$i]) {
        case 1: 
        case 2: 
        case 3:
        case 4:
        case 5:
    
}




for ($i = 0; $i < strlen($frase);$i++) {
            if (esVocal($frase[$i])){
         echo 'a';
            }
            else {
               echo "$frase[$i]";
                
            }
}

