<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* leer un dni sin letra y la calcule. */

$dni = $_POST["dni"];
$cambios=array(0=>'T',1=>'R',2=>'W',3=>'A',4=>'G',5=>'M',6=>'Y',7=>'F',8=>'P',9=>'D',10=>'X',11=>'B',12=>'N',13=>'J',14=>'Z',15=>'S',16=>'Q',17=>'V',18=>'H',19=>'L',20=>'C',21=>'K',22=>'E');
$resto = $dni % 23;
echo "La letra del DNI $dni es $cambios[$resto]";

