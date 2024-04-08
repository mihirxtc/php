<?php

// 4. parameterized & non-parameterized functions for string concatenation

// parameterized
function joinString($a, $b) {
	$c = $a." ".$b;
	return $c;
}
$a = "hello";
$b = "php";
echo joinString($a, $b);

// non-parameterized
function joinString1() {
	$a = "hello";
	$b = "php again";
	$c = $a." ".$b;
	return $c;
}
echo joinString1();

?>