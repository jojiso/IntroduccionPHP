<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$euros = $_POST["euros"]*100;
/*$monedero=array(0=>'500',1=>'200',2=>'100',3=>'50',5=>'20',6=>'10',7=>'5',8=>'1',9=>'0.5',10=>'0.2',11=>'0.1',12=>'0.05',13=>'0.02',14=>'0.01');*/
$monedero=[500,200,100,50,20,10,5,2,1,0.5,0.2,0.1,0.05,0.02,0.01];
$i=0;
echo $euros/100," se divide en: <br>";
$resultado=intdiv($euros,$monedero[$i]);
  
 while ($euros>0) {
    $resultado=intdiv($euros,$monedero[$i]*100);
    $euros=$euros%($monedero[$i]*100);
    echo $euros/100,"  restantes    ","$resultado billetes/monedas de ",$monedero[$i],"<br>";
    $i++;
     
}

/*if (isset($_POST['euros']))
            {  
                $monedero=[500,200,100,50,20,10,5,2,1,0.5,0.2,0.1,0.05,0.02,0.01];
                $euros = $_POST['euros']*100;
                $i=0;
                while ($euros>0){
                    $cantidad = intdiv($euros, $monedero[$i]*100);
                    $euros = $euros%($monedero[$i]*100);
                    echo $euros/100," $cantidad billetes/monedas de ",$monedero[$i],"<br>";
                    $i++;
                }
            }*/
 
