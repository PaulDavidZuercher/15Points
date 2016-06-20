<?php

$zufallszahl = rand(1000000,9000000);
$i = $zufallszahl-1;
$primtest = false;
echo "erster Zufall: " . $zufallszahl . "\n";


while($primtest==false){    
    if($i == 1){
        $primtest = true;
        echo "erzeugte Primzahl: " . $zufallszahl;
        break;
    }

    
    
    while($i > 1){
        if(($zufallszahl % $i) != 0 AND $i != 1){
            $i = $i-1;
        }
        if(($zufallszahl % $i)==0 AND $i != 1){
            $zufallszahl = rand(1000000,9000000);
            $i = $zufallszahl -1;
            //echo "Keine Primzahl";
            //$primtest=true;
            break;
            
        }

    }
    
}


?>
