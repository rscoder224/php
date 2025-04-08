<!-- Functions Inside Functions (Higher Order Functions or Nested Functions);  -->

<?php 

// function test(){
// echo "test";
// }


// test();



// function addmuldiv($a,$b){
//     echo "<br>"
//     function mul(){
//         echo $a*$b;
//     }
//     echo "<br>";
        
//     function div(){
//         echo $a/$b;
//     }
// }



// addmuldiv(22,33);




function test(){
    echo "Test Function Called <br>";

    function test2(){
        echo "test2 func called I am from Test";
    }
}


test();

test2();


