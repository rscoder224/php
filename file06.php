<!-- Comparison Operators In PHP -->
  <?php

    //  operators           Name                     Example                                      Result
    //      ==             eaqual                  $x== $y                          returns true if $x = $y
    //      ===            Identical               $x===$y                          returns true if $x=$y and $x,$y of same type
    //      !=             not equal               $x!=$y                           returns true if $x is not equal to $y
    //      <>             not equal               $x!=$y                           returns true if $x is not equal to $y
    //      !==            not Identical           $x!==$y                          returns true if $x is not equal to $y and both are not same type            
    //      >              greater Than            $x > $y                          returns true if $x is greater than $y 
    //      <              less than               $x < $y                          returns true if $x is less than $y
    //      >=             greater than equal to   $x >= $y                         returns true if $x is equal to $y or greater than $y
    //      <=             less than equal to      $x <= $y                         returns true if $x is equal to $y or less than    $y
    //      <=>            spaceship               $x <=> $y                          


// using all of these operators in Php


 $a = 5;
 $b = 5;

 var_dump ($a == $b);
 echo "<br>";

 var_dump ($a=== $b);
 echo "<br>";

 var_dump ($a != $b);
 echo "<br>";
 
 var_dump ($a<> $b);
 echo "<br>";
 
 var_dump ($a !== $b);
 echo "<br>";
 
 var_dump ($a > $b);
 echo "<br>";
 
 var_dump ($a < $b);
 echo "<br>";
 
 var_dump ($a >= $b);
 echo "<br>";
 
 var_dump ($a <= $b);
 echo "<br>";
 
 echo var_dump ($a <=> $b);

 
 