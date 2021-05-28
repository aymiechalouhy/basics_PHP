<?php

function palindrome($string) {
    if(strrev(strtolower($string)) == strtolower($string)) {
        echo 'Palindrome';
    } else {
        echo 'Not Palindrome';
    }
}

palindrome($_GET['string']);