<?php

function greaterFn($num){
  
  if ($num > 30)
   $number= "$num is greater than 30";
   else if ($num >20)
   $number= "$num is greater than 20";
   else if ($num >10)
   $number= "$num is greater than 10";
   if ($num < 10)
   $number = " $num is less than 10";

   return $number;
  }

  $result= greaterFn(22);
  echo $result;

?>