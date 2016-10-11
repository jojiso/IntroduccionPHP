<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$frase=$_POST['frase'];
$cociente=$frase;
$resto=NULL;
$binario=NULL;

while ($cociente > 1){
       $resto.=$cociente%2;
    $cociente = $cociente/2;                
}
$resto.=$cociente;
for($i=strlen($resto)-1;$i>=0;$i++){
$binario.=$resto[$i];   
}

echo $binario;