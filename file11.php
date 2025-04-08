<!--  Logical Operators  -->
 <!-- Logical Operators Are Symbols that combine two or more expression
   -->

   <?php


//  Operator  Name   Example            

//         Operator	        Name	        Example	                                   Result	
//         and            	And	            $x and $y                           True if both $x and $y are true	
//         or            	Or	            $x or $y	                        True if either $x or $y is true	
//         xor            	Xor 	        $x xor $y                           True if either $x or $y is true, but not both	
//         &&            	And	            $x && $y	                        True if both $x and $y are true	
//         ||            	Or              $x || $y	                        True if either $x or $y is true	
//         !	            Not	            !$x	                                True if $x is not true	


// Using and operator 

$maths = 85;
$science  = 70;

if($maths and $science >= 75){
    echo " You are Qualified";
}else {
    echo "You are Disqualified";
}

echo "<br>";
echo "<br>";
echo "<br>";



if($maths && $science >= 75){
    echo " You are Qualified";
}else{
    echo "You are Disqualified";
}


echo "<br>";
echo "<br>";
echo "<br>";


// Using Or operator 

if($maths or $science >= 75){
    echo "You got Qualified";
}else{
    echo "You got disqualified";
}

echo "<br>";
echo "<br>";
echo "<br>";



if($maths || $science >= 75){
    echo "You got Qualified";
}else{
    echo "You got disqualified";
}

















