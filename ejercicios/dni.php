<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dni = $_POST["dni"];
$numero="";
$cambios=array(0=>'T',1=>'R',2=>'W',3=>'A',4=>'G',5=>'M',6=>'Y',7=>'F',8=>'P',9=>'D',10=>'X',11=>'B',12=>'N',13=>'J',14=>'Z',15=>'S',16=>'Q',17=>'V',18=>'H',19=>'L',20=>'C',21=>'K',22=>'E');
for ($i=0;$i<8;$i++) {
$numero=$numero.$dni[$i];
}
$resto = $numero % 23;
$letra = $cambios[$resto];
if ($dni[8]==$letra) {
echo "El $dni es correcto.";
}
else {
 echo "El $dni es incorrecto. La letra del DNI debe ser $letra";
}

/*$documentoid = $_POST["documentoid"];
$cambios=array(0=>'T',1=>'R',2=>'W',3=>'A',4=>'G',5=>'M',6=>'Y',7=>'F',8=>'P',9=>'D',10=>'X',11=>'B',12=>'N',13=>'J',14=>'Z',15=>'S',16=>'Q',17=>'V',18=>'H',19=>'L',20=>'C',21=>'K',22=>'E');
function nif($documento,$cambio) {
    
for ($i=0;$i<8;$i++) {
$numero=$numero.$documento[$i];
}
$resto = $numero % 23;
$letra = $cambio[$resto];
if ($documento[8]==$letra) {
echo "El documento es un NIF válido.";
}
else {
 echo "El documento no es un NIF o NIE válido.";
}
}