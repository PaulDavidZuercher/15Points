<?php
$zufallszahl = rand(1000000,9000000);
$i = $zufallszahl-1;
$primtest = false;
//echo "erster Zufall: " . $zufallszahl . "\n";

while($primtest==false){    
    if($i == 1){
        $primtest = true;
        echo "erzeugte Primzahl p : " . $zufallszahl . "\n";
        $p = $zufallszahl;
        break;
    }
    
    
    while($i > 1){
        if(($zufallszahl % $i) != 0 AND $i != 1){
            $i = $i-1;
        }
        if(($zufallszahl % $i)==0 AND $i != 1){
            $zufallszahl = rand(1000000,9000000);
            $i = $zufallszahl -1;
            break;
            
        }
    }
    
}



$zufallszahl2 = rand(1000000,9000000);
$i2 = $zufallszahl2-1;
$primtest2 = false;
//echo "zweiter Zufall: " . $zufallszahl2 . "\n";

while($primtest2==false){    
    if($i2 == 1){
        $primtest2 = true;
        echo "erzeugte Primzahl q : " . $zufallszahl2 . "\n";
        $q = $zufallszahl2;
        break;
    }
    
    
    while($i2 > 1){
        if(($zufallszahl2 % $i2) != 0 AND $i2 != 1){
            $i2 = $i2-1;
        }
        if(($zufallszahl2 % $i2)==0 AND $i2 != 1){
            $zufallszahl2 = rand(1000000,9000000);
            $i2 = $zufallszahl2 -1;
            break;
            
        }
    }
    
}

$n = $p*$q;
echo "n : " . $n;

?>
