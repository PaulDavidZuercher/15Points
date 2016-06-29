<?php

decrypt("23", 12, 3);
function decrypt ( $txt, $puK, $n )
{
  $e = $puK;
  $durchzaehlen = 0;
  $decryptTxt = array ();
  $txtLaenge = strlen ($txt);
  
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
  
 
 $zwischenArray = explode(" ", $txt);
 $arrayLaenge = count($zwischenArray);
  while ($durchzaehlen <= $arrayLaenge)
  { 
    $zwischenZeichen = $zwischenArray[$durchzaehlen]; 
    $zwischenZeichen2 = (pow ($zwischenZeichen ,$e )) % $n; // von mathematik.de
    $decryptedZeichen = $zeichen[$zwischenZeichen2]; //nimmt das aus dem txt-string ausgewählte Zeichen und sucht es im array "zeichen"
    $decryptTxt["$durchzaehlen"] = $decryptedZeichen; //fügt zu Gesamt_decryptedTxt_array die einzelnen decrypted Zeichen hinzu
   $durchzaehlen++;
  }
$decryptedTxtString = implode("",$decryptTxt) ;
echo "Entschlüsselter Text:" . $decryptedTxtString;
return $decryptedTxtString; //Rückgabe des verschlüsselten $txt-Passworts
  
}
?>
