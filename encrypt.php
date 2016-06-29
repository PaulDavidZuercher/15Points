<?php

//n : 58339
//phi: 57856   e: 61   d: 0.016393442622951

encrypt("STUV89", 61, 58339);
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
  
 
  while ($durchzaehlen <= $txtLaenge) //für jedes einzele Zeichen des übergebenen txts ausführen 
  { 
    $zwischenZeichen = substr($txt, $durchzaehlen, 1); //liest einzelnes Zeichen aus dem übergebenen txt-String aus
    $zeichenImArray = array_search("$zwischenZeichen", $zeichen);
    //$zeichenImArray = $zeichen[$zwischenZeichen]; //nimmt das aus dem txt-string ausgewählte Zeichen und sucht es im array "zeichen"
    $encryptedZeichen = (pow ($zeichenImArray ,$e )) % $n; // von mathematik.de; Zahlenkette wird verschlüsselt
    $encryptTxt[$durchzaehlen] = $encryptedZeichen; //fügt zu Gesamt_decryptedTxt_array die einzelnen decrypted Zeichen hinzu
   $durchzaehlen++;
  }
$encryptedTxtString = implode(" ",$encryptTxt) ;
echo "Verschlüsselter Text:" . $encryptedTxtString;
return $encryptedTxtString; //Rückgabe des verschlüsselten $txt-Passworts
  
}
?>

