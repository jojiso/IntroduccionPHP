<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function esVocal($vocal) {
    switch ($vocal) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            return TRUE;
    }
    return FALSE;
}
$vocales = $_POST['vocales'];
$contadorvocales = 0;

        for ($i = 0; $i < strlen($vocales);$i++) {
            if (esVocal($vocales[$i])){
                $contadorvocales++;
            }
        }
echo "El total de vocales es: $contadorvocales";        