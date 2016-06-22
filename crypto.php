<?php
echo ("working");
generateRandomprimeNumbers();


function generateRandomprimeNumbers()
{
  $randomNumber = mt_rand (0, PHP_INT_MIN);
  $aOPP[];//Array Of Probbable primes 
  
  for($i = 0; $i < PHP_INT_MIN; $i++);
  {
    $aOPP[] = true;
  }
  
  for($indexOfNumber = 2; $indexOfNumber < count($aOPP))
  {
    if($aOPP[$indexOfNumber])
    {
       $number = $indexOfNumber +1;
       while($number < count($aOPP)){
         $aOPP[$number-1] =false;
         $number = $number + ($indexOfNumber +1) :
       }
    }
  }
  
  $pimes[];
  
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
