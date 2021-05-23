<?php

$course_name= "Photoshop";
$enrolled_students= 20;
$price= 75.55;
$on_discount= false ;

echo 

"Course title: $course_name  </br>
Enrolled Students: $enrolled_students  </br>
Course price: $price $ USD </br>
Course on discount: ".
($on_discount ? 'No' : 'Yes')
    . " / " .
(!$on_discount ? 'No' : 'Yes');

?>