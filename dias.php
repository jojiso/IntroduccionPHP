<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$mes = $_POST ('mes');
$anyo = $_POST ('anyo');
switch ($mes) {
    case 1: case 3: case 5: case 7: case 8: case 10: case 12:
      echo "$mes tiene 31 dias";  

        break;

    case 4: case 6: case 9: case 11:
        echo "$mes tiene 30 dias";
        break;
}      
 