<?php

$data = urldecode($_GET['data']);
$info = json_decode($data);

//print_r($info);
foreach ($info as $key=>$value){
    echo $key . ': ' . $value . '<br>';
}