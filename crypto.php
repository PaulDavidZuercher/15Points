<?php
if($_GET["Debug"] == "true")
	echo("Version 0.1001 \n");

generateRandomprimeNumbers();
echo ("finished \n");

function generateRandomprimeNumbers()
{
  $maxGenInt = 200;
  $randomNumber = mt_rand (0, $maxGenInt);
  $aOPP = [];//Array Of Probbable primes 
  for($i = 0; $i < $randomNumber; $i++)
  {
	echo("working: maxGenInt Progress:  $i from $randomNumber \n");
	$aOPP[] = true;
  }
  echo ("Start on removing:");
  
  for($indexOfNumber = 2; $indexOfNumber < count($aOPP); $indexOfNumber++)
  {
    if($aOPP[$indexOfNumber])
    {
	$number = $indexOfNumber +1;
	while($number < count($aOPP))
        {
		echo("removing: " .($number - 1). "\n");
		
		$aOPP[$number-1] =false;
		$number = $number + ($indexOfNumber +1);
	}
    }
  }
  echo ("pint primes: \n");
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
