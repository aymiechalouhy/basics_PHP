<?php
function ispalindrome($word){
    $result= strrev($word); 
    if($word == $result){
        return "$word is palindrome";
    }
    return "$word isn't palindrome";
}
echo ispalindrome(madam)."<br>";
echo ispalindrome(aymie);

?>