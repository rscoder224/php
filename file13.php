<!-- Break and Continue Keyword -->

<?php

for($i = 0; $i<=10; $i++){
    echo $i;
    echo "<br>";
   if($i === 5){
    break;
   }
}



for($i = 0; $i<=10; $i++){
    if($i === 5){
        continue;}
    echo $i;
    echo "<br>";
   
}


