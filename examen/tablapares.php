 <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$diagonal = 1;
echo "<table><tr>";
for($i=1;$i<=100;$i++){
    echo "<td>";
    if ($i==$diagonal){
        echo "<strong>";
    }
    echo $i*2;
    if ($i==$diagonal){
        echo "</strong>";
        $diagonal+=11;
    }
    echo "</td>";
    if($i%10==0) {
        echo "</tr><tr>";
    } 
}
echo "</tr></table>";