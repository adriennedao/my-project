<?php

print '<h1>My PHP File</h1>';
print '<br><br>';

function addNumbers($number1, $number2)
{

	$sum = $number1 + $number2;

		return $sum;

}


$result = addNumbers(34,64);

echo $result;

echo "<br>";

$result = addNumbers(100, $result);

echo $result;

echo "<br>";

$result = addNumbers(300, $result);

echo $result;