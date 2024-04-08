<?php
 
// 1. count the total number of times a specific value appears in an array


$array = array(1, 2, 3, 4, 5, 4, 6, 7, 4, 8, 9, 4);
$value = 4;
$total = 0;

for ($i=0; $i<count($array); $i++) {
	if ($array[$i] == $value) {
		$total++;
	}
}

echo "total $value in array is $total times";

?>