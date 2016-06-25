<?php

//Testwerte
$txt = "ABCDE23";
$puK = 12;
$n = 3;
function decrypt ( $txt, $puK, $n )
{
  $e = $puK;
  $durchzaehlen = 0;
  $decryptTxt = array;

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
  )

  while ($durchzaehlen >= $txt.length) //für jedes einzele Zeichen des übergebenen txt´s ausführen
  { 
    $zwischenZeichen = substr ($txt, $durchzaehlen, 1); //liest einzelnes Zeichen aus dem übergebenen txt-String aus
    $zeichen($zwischenZeichen); //nimmt das aus dem txt-string ausgewählte Zeichen und sucht es im array "zeichen"
    $decryptedZeichen = (pow ($zeichen ,$e )) % $n; // von mathematik.de
    $decryptTxt["$durchzaehlen"] = $decryptedZeichen; //fügt zu Gesamt_decryptedTxt_array die einzelnen decrypted Zeichen hinzu
   $durchzaehlen++;
  }
$decryptedTxtString = implode("",$decryptTxt);
  return $decryptedTxtString; //Rückgabe des verschlüsselten $txt-Passworts
  echo $decryptedTxtString;
}

?>
