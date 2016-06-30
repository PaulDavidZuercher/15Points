<?php
if($_GET["Debug"] == "true")
	echo nl2br("Version 0.1013 \n");

generateRandomprimeNumbers();
echo nl2br("finished \n");

function generateRandomprimeNumbers()
{
  $maxGenInt = 214745;
  $randomNumber = mt_rand (0, $maxGenInt);
  $aOPP = [];//Array Of Probbable primes 
  for($i = 0; $i < $randomNumber; $i++)
  {
	$aOPP[] = true;
  }
   
  for($indexOfNumber = 1; $indexOfNumber < $randomNumber;$indexOfNumber++)
  {
    if($aOPP[$indexOfNumber])
    {
	$buffNumInd = $indexOfNumber;
	while( $buffNumInd < count($aOPP))
        {
		$buffNumInd = $buffNumInd + ($indexOfNumber +1);
		$aOPP[$buffNumInd] =false;
	}
    }
  }
  
  echo nl2br("pint primes: \n");
  $pimes = []; 
  
  for($i = 0; $i < $randomNumber; $i++)
  {
    if($aOPP[$i])
    {
      $primes[] = $i +1; #Primenumber = index + 1 
      echo nl2br("Prime: " . ($i+1) . "\n");
    }
  }
}



?>
