<?php
$num = 3;
$factorial = 1;

while ($factorial <= $num){
  
  $num = $num * $factorial;
  $factorial++;

}

//3*1=3     3*2=6   
//fa  =2     fa=3
//


echo "The factorial of $num is $factorial";
?>