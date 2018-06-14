<?php

print '<h1>My PHP File</h1>';
print '<br><br>';

function calculation(){

	$number1 = 20;
	$number2 = 50;

	$sum = $number1 + $number2;

	return $sum;
}

$theSum = calculation();

echo $theSum . "<br>";


function hola($hello){

echo $hello;

}

hola('Hey is that php?');