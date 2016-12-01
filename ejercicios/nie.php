<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nie = $_POST["nie"];
$cambios=array(0=>'T',1=>'R',2=>'W',3=>'A',4=>'G',5=>'M',6=>'Y',7=>'F',8=>'P',9=>'D',10=>'X',11=>'B',12=>'N',13=>'J',14=>'Z',15=>'S',16=>'Q',17=>'V',18=>'H',19=>'L',20=>'C',21=>'K',22=>'E');
switch ($nie[0]) {
    case "X":
    $numero="0";
    break;
    case "Y":
    $numero="1";
    break;
    case "Z":
    $numero="2";
    break;
}
for ($i=1;$i<9;$i++) {
$numero=$numero.$nie[$i];
}
$resto = $numero % 23;
$letra = $cambios[$resto];
if ($nie[9]==$letra) {
echo "NIE correcto.";
}
else {
 echo "NIE incorrecto. El dígito de control debe ser $letra";
}