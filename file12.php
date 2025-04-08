<!-- Loops in Php  -->
<?php


// $num = 1000;
// // $i = 0;
// // while($i< $num){
// //     echo $i;
// //     $i++
// // }

// for($start = 0; $start <= $num; $start++){
//     echo $start;
//     echo "<br>";
// }




// $total = 0;

// for($start = 0 $start <=10; i++ ){
//   $total += $start; 
//   echo $total;
// }


$table = 120;

for($start = 1; $start <= 10; $start++){
    echo $table*$start;
    echo "<br>";
    echo "<b>";
}


$total = 0;

for($start = 0 ; $start<=10; $start++){
    $total = $total + $start;
    echo $total;
    echo "<br>";
    echo "<b>";
}

