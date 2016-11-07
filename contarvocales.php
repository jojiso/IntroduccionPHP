<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$vocales = $_POST['vocales'];

$totalvocales = 0;


for ($i = 0; $i < strlen($vocales); $i++) {
    switch ($vocales[$i]) {
        case "a": 
        case "e": 
        case "i":
        case "o":
        case "u":
            $totalvocales++;
            break;      
    }
}
echo "El total de vocales es: $totalvocales";
