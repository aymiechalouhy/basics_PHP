<?php
function isprime($number) {
    if ($number == 1) {
      return "this a prime number";
    } else {
      for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
          return "$number is not prime";
        }
      }
      return "$number is prime";
    }
  }
    echo isprime(25)."<br>";
  echo isprime(3);
?>