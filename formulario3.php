<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$vehiculo=$_POST['vehiculo'];

foreach ($vehiculo as $elemento) {
      echo "Ha elegido $elemento <br>\n";  
}