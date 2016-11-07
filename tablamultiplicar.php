<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numero = $_POST['numero'];

for ($i=1;$i<=10;$i++){
echo "$numero x $i =".$numero*$i."<br>\n";
}