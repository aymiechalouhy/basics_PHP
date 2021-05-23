<?php
$name="Aymie";
$position="IT Student";
$github_url="https://github.com/aymiechalouhy";


//Using the double quotation " and without using the .
echo "Hello, I'm $name, I'm an $position please check my github link $github_url. </br></br>";

//Using the double quotation " and the .
echo "Hello, I'm " .$name. ", I'm an " .$position. " please check my github link ".$github_url. ".<br /><br />";

//Without using the double quotation ".
echo 'Hello, I\'m ' ,$name, ' I\'m an ' ,$position, ' please check my github link', $github_url,'.';

?>