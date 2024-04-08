<?php 

// 9. demonstrate use of multidimensional arary

$student = array(array(1, "one"), array(2, "two"), array(3, "three"));
foreach ($student as $key=>$i) {
	echo "$key=>";
	foreach($i as $j) {
		echo $j;
	}
	echo "<br>";
}

?>