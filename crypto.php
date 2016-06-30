<?php
if($_GET["Debug"] == "true")
	echo nl2br("Version 0.1006 \n");

generateRandomprimeNumbers();
echo nl2br("finished \n");

function generateRandomprimeNumbers()
{
  $maxGenInt = 200;
  $randomNumber = mt_rand (0, $maxGenInt);
  $aOPP = [];//Array Of Probbable primes 
  for($i = 0; $i < $randomNumber; $i++)
  {
	echo nl2br("working: maxGenInt Progress:  $i from $randomNumber \n");
	$aOPP[] = true;
  }
  echo nl2br("Start on removing:");
  
  for($indexOfNumber = 3; $indexOfNumber < count($aOPP); $indexOfNumber++)
  {
    if($aOPP[$indexOfNumber])
    {
	$number = $indexOfNumber +1;
	while($number < count($aOPP))
        {
		echo nl2br("removing: " .($number). "\n");
		
		$aOPP[$number-1] =false;
		$number = $number + ($indexOfNumber);
	}
    }
  }
  echo nl2br("pint primes: \n");
  $pimes = []; 
  
  for($i = 0; $i < (count ($aOPP)-1); $i++);
  {
    if($aOPP[$i])
    {
      $primes[] = $aOPP[$i];
      echo($aOPP[$i]);
    }
  }
}



?>
