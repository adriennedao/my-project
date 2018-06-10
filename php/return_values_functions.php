<?php

print '<h1>My PHP File</h1>';
print '<br><br>';

function addNumbers()
{

	$sum = $number1 + $number2;

		return $sum;

}


$result = addNumbers(34,64);

$result = addNumbers(100, $result);

echo $result;