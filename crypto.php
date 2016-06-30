<?php
generateRandomprimeNumbers();
echo ("finished");

function generateRandomprimeNumbers()
{
  $maxGenInt = 200;
  $randomNumber = mt_rand (0, $maxGenInt);
  $aOPP[] = array();//Array Of Probbable primes 
for($i = 0; $i < $randomNumber; $i++);
  {
	echo("working: maxGenInt Progress:  $i from $randomNumber");
	$aOPP[] = true;
  }
  echo ("test2");
  
  for($indexOfNumber = 2; $indexOfNumber < count($aOPP); $indexOfNumber++)
  {
    echo("working...");
    if($aOPP[$indexOfNumber])
    {
	echo("removing: " .(indexOfNumber +1));
	$number = $indexOfNumber +1;
	while($number < count($aOPP))
        {
		$aOPP[$number-1] =false;
		$number = $number + ($indexOfNumber +1);
	}
    }
  }
  echo ("test3");
  $pimes[] = array();
  
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
