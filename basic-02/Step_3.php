<?php

function swap($var1, $var2){

    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;

    return $var1 . "<br />" . $var2;
}

$result= swap(32,45);
echo $result;

?>