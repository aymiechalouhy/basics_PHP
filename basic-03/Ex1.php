<?php

$row = 8;

$star = 1;
while ($star <= $row) {
    $a = 0;
    while ($a < $star) {
        echo "*";
        $a++;
    }
    echo "<br />";
    $star++;
}