<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<table border=1>";
echo '<tr style="background-color:blue">';

for($i=1;$i<=100;$i++){
    echo "<td>$i</td>";
    if ($i%10==0){
    echo "</tr><tr>";    
    }           
}
echo "</tr>";
echo "</table>";
