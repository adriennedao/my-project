<?php

print '<h1>My PHP File</h1>';
print '<br><br>';

function BaseCalculator() {
	$number1 = 100;
	$number2 = 200;
	
	$sum= $number1 + $number2;

	return $sum;
}

$theSum = BaseCalculator();
	
	echo $theSum . "<br>";

function addButton($button1) {

	echo $button1;
}

addButton(' + , - , % , x '); 