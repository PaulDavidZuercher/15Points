<?php
echo ("working");
generateRandomprimeNumbers();
echo ("finished");

function generateRandomprimeNumbers()
{
  $randomNumber = mt_rand (0, PHP_INT_MAX);
  $aOPP[] = array();//Array Of Probbable primes 
  echo ("test1");
  for($i = 0; $i < PHP_INT_MAX; $i++);
  {
    $aOPP[] = true;
  }
  echo ("test2");
  for($indexOfNumber = 2; $indexOfNumber < count($aOPP); $indexOfNumber++)
  {
    if($aOPP[$indexOfNumber])
    {
       $number = $indexOfNumber +1;
       while($number < count($aOPP)){
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
