<?php

 function armStrong($number) {
    $numberOfDigits = $number.length;
    $sum = 0;

    $temp = $number;

    while ($temp > 0) {
        $remainder = $temp % 10;

        $sum += $remainder ** $numberOfDigits;

        $temp =  (int)$temp / 10;
    }
   
    if ((int)$sum == $number) {
        return $number. "," . $sum. " is Armstrong number";
    } else {
        return $number. "," . $sum. " is not an Armstrong number";
    }
}
echo armStrong(371);

?>