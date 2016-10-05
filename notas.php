<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$notas= $_POST['notas'];

if ($notas < 5){
    echo "$notas es un Suspenso";
} 
    elseif ($notas < 6) {
    echo "$notas es un Aprobado";
} 
    elseif ($notas < 7) {
    echo "$notas es un Bien";
}
    elseif ($notas < 9) {
    echo "$notas es un Notable";
}
    elseif ($notas < 10) {
    echo "$notas es un Sobresaliente";
}   
    elseif ($notas == 10) {
    echo "$notas es una Matricula de Honor";
}
    else {
        echo "$notas no es una nota valida";
    }
   