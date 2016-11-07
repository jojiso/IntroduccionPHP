<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*Hacer un conversor de euros a dolares*/

$euros=$_POST['euros'];

$dolares=$euros * 1.08873;
        
echo "$euros € = $dolares $";
