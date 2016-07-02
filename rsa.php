<?php


generateKeys();
function generateKeys() {
$zufallszahl = rand(2,1000);
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
            $zufallszahl = rand(2,1000);
            $i = $zufallszahl -1;
            break;
            
        }
    }
    
}



$zufallszahl2 = rand(2,1000);
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
            $zufallszahl2 = rand(2,1000);
            $i2 = $zufallszahl2 -1;
            break;
            
        }
    }
    
}

$n = $p*$q;
echo "n : " . $n . "\n";


$phi = ($p-1)*($q-1);
//unset($p);
//unset($q);
echo "phi: " . $phi;

$primarray = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97);
$index = rand(0,24);
while(1==1){
    
    
    $eteiler =$primarray[$index];

    if($phi % $eteiler == 0){
        $index++;
    }
    else{
        $e = $primarray[$index];
        break;
    }
}


function invmod($a,$b) {
    $n=$b;
    $x=0; $lx=1; $y=1; $ly=0;
    while ($b) {
      $t=$b;
      $q=bcdiv($a,$b,0);
      $b=bcmod($a,$b);
      $a=$t;
      $t=$x; $x=bcsub($lx,bcmod(bcmul($q,$x),$n)); $lx=$t;
      $t=$y; $y=bcsub($ly,bcmod(bcmul($q,$y),$n)); $ly=$t;
    }
    if (bccomp($lx,0) == -1)
      $lx=bcadd($lx,$n);
    return $lx;
  }

$d = invmod($e,$phi);

echo "   e: " . $e;
echo "   d: " . $d . " ";
echo ($e*$d) % $phi;
return $e;
return $n;
return $d;
} // Ende generateKeys



encrypt("ABC", $e, $n);
function encrypt ( $txt, $puK, $n )
{
  $e = $puK;
  $durchzaehlen = 0;
  $encryptTxt = array();
  $txtLaenge = strlen($txt);
  
  $zeichen = array
  ( 
    "01"  => "A",
    "02" => "B",
    "03" => "C",
    "04" => "D",
    "05" => "E",
    "06" => "F",
    "07" => "G",
    "08" => "H",
    "09" => "I",
    "10" => "J",
    "11" => "K",
    "12" => "L",
    "13" => "M",
    "14" => "N",
    "15" => "O",
    "16" => "P",
    "17" => "Q",
    "18" => "R",
    "19" => "S",
    "20" => "T",
    "21" => "U",
    "22" => "V",
    "23" => "W",
    "24" => "X",
    "25" => "Y",
    "26" => "Z",
    "27" => "1",
    "28" => "2",
    "29" => "3",
    "30" => "4",
    "31" => "5",
    "32" => "6",
    "33" => "7",
    "34" => "8",
    "35" => "9",
  );
  
 
  while ($durchzaehlen <= $txtLaenge) //für jedes einzele Zeichen des übergebenen txts ausführen 
  { 
    $zwischenZeichen = substr($txt, $durchzaehlen, 1); //liest einzelnes Zeichen aus dem übergebenen txt-String aus
    $zeichenImArray = array_search("$zwischenZeichen", $zeichen); // im Zeichen-Array wird nach dem zwischenZeichen-Inhalt gesucht und dann der zugehörige Schlüssel ausgegeben
    //$zeichenImArray = $zeichen[$zwischenZeichen]; //nimmt das aus dem txt-string ausgewählte Zeichen und sucht es im array "zeichen"
    $encryptedZeichen = (pow ($zeichenImArray ,$e )) % $n; // von mathematik.de; Zahlenkette wird verschlüsselt
    $encryptTxt[$durchzaehlen] = $encryptedZeichen; //fügt zu Gesamt_decryptedTxt_array die einzelnen decrypted Zeichen hinzu
   $durchzaehlen++;
  }
$encryptedTxtString = implode(" ",$encryptTxt) ; //wandelt Array in String um mit Leerzeichenabtrennung zwischen den jeweiligen Werten
echo "Verschlüsselter Text:" . $encryptedTxtString;
return $encryptedTxtString; //Rückgabe des verschlüsselten $txt-Passworts
} //Ende encrypt


//n : 45091
//  e: 47   d: 0.021276595744681

decrypt("1 21873 24678 0", 0.021276595744681, 45091);
function decrypt($txt, $prK, $n)
{
  $e = $prK;
  $durchzaehlen = 0;
  $decryptTxt = array ();
  $zwischenArray = array ();
  
  $zeichen = array
  ( 
    "A"  => "01",
    "B" => "02",
    "C" => "03",
    "D" => "04",
    "E" => "05",
    "F" => "06",
    "G" => "07",
    "H" => "08",
    "I" => "09",
    "J" => "10",
    "K" => "11",
    "L" => "12",
    "M" => "13",
    "N" => "14",
    "O" => "15",
    "P" => "16",
    "Q" => "17",
    "R" => "18",
    "S" => "19",
    "T" => "20",
    "U" => "21",
    "V" => "22",
    "W" => "23",
    "X" => "24",
    "Y" => "25",
    "Z" => "26",
  
    "1" => "27",
    "2" => "28",
    "3" => "29",
    "4" => "30",
    "5" => "31",
    "6" => "32",
    "7" => "33",
    "8" => "34",
    "9" => "35",
  );
  
 
 $zwischenArray = explode(" ", $txt); // liest aus übergebenem txt-String alle einzelnen Ergebnisse aus; Leerzeichen ist die Begrenzungszeichenkette und schreibt sie getrennt in ein array
 $arrayLaenge = count($zwischenArray);
  while ($durchzaehlen < $arrayLaenge) //durchläuft zwischenArray
  { 
    $zwischenZeichen = $zwischenArray[$durchzaehlen]; // einzelne Zahlenketten werden aus array qausgelsenen und in zwischenZeichen gespeichert
    $zwischenZeichen2 = (pow ($zwischenZeichen ,$e )) % $n; // von mathematik.de, zwischenZeichen-Zahlenkette wird wieder entschlüsselt
    $decryptedZeichen = array_search("$zwischenZeichen2", $zeichen); //im zeichen-Array wird nach dem Inhalt "zwischenzeichen2" gesucht und dann der zugehörige Schlüssel ausgegeben
    //$decryptedZeichen = $zeichen[$zwischenZeichen2]; // das entsprechende Zeichen zur entschlüsselten Zahlenkette wird im array zeichen gesucht 
    $decryptTxt["$durchzaehlen"] = $decryptedZeichen; //Fügt zu Gesamt_decryptedTxt_array die einzelnen decrypted Zeichen hinzu
    $durchzaehlen++;
  }
$decryptedTxtString = implode("",$decryptTxt) ; //wandelt array in String um
echo "Entschlüsselter Text:" . $decryptedTxtString;
return $decryptedTxtString; //Rückgabe des entschlüsselten $txt-Passworts
} //Ende decrypt

?>
