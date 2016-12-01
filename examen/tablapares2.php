<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<table>";
for($i=0;$i<10;$i++){
   echo "<tr>";
   for($j=1;$j<=10;$j++){
       echo "<td>";
       if ($i + 1 == $j) {
            echo "<strong>", 2*($i * 10 + $j), "</strong>";
        } else {
            echo 2*($i * 10 + $j);
        }
        echo "</td>";
   }
   echo "</tr>";
}
echo "</table>";