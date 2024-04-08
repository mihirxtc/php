<?php 

// 8. create an array name $student that stores 5 element bounded to different keys & access the same using the key element

$student = array(1=>"one", 2=>"two", 3=>"three", 4=>"four", 5=>"five");
foreach($student as $key=>$i) {
	echo "$key=>$i <br>";
}

?>