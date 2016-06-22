

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
$zufallszahl2 = rand(1000000,9000000);
$i = $zufallszahl2-1;
$primtest = false;
echo "erster Zufall: " . $zufallszahl2 . "\n";
while($primtest==false){    
    if($i == 1){
        $primtest = true;
        echo "erzeugte Primzahl: " . $zufallszahl2;
        break;
    }
    
    
    while($i > 1){
        if(($zufallszahl2 % $i) != 0 AND $i != 1){
            $i = $i-1;
        }
        if(($zufallszahl2 % $i)==0 AND $i != 1){
            $zufallszahl2 = rand(1000000,9000000);
            $i = $zufallszahl2 -1;
            //echo "Keine Primzahl";
            //$primtest=true;
            break;
            
        }
    }
    
}
$p = $zufallszahl;
$q = $zufallszahl2;
$n = $p * $q;
$phiOfN = ($p−1)*($q−1);
$teilerfremd = false;


 while ($teilerfremd == false) {
    $e = rand(2, 100);
    $Rest = 2;
    while ($Rest != 0) {
        if ($e % $phiOfN == 0) {
            echo "\n ". $Rest . "ggT";
            if ($Rest == 1) {
                $teilerfremd = true;
                 break;
            }
        }
        $Rest = $e % $phiOfN;
        $phiOfN = $e;
        $phiOfN = $Rest;
    }
}
 
 
 
echo $d;
echo $e;
?>
 
