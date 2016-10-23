<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$frase=$_POST['frase'];
$frase2=$_POST['frase2'];

$file = fopen("archivo.txt", "a");
fwrite($file,$frase . PHP_EOL);
fwrite($file, $frase2 . PHP_EOL);
fclose($file);

