<?php
//n : 58339
//phi: 57856   e: 61   d: 0.016393442622951
encrypt("ABC", 61, 58339);
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
$encryptedTxtString = implode(" ",$encryptTxt) ;
echo "Verschlüsselter Text:" . $encryptedTxtString;
return $encryptedTxtString; //Rückgabe des verschlüsselten $txt-Passworts
  
}
?>
