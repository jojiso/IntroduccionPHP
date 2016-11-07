<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$archivo=$_POST['archivo'];

$file = fopen($archivo, "r");
while(!feof($file)) {    
    echo fgets($file). "<br />";
}
fclose($file);

