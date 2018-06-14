<?php

print '<h1>My PHP File</h1>';
print '<br><br>';

echo rand(1, 1000) . "<br>";

$string = "skjfhdlksk;;k";

$valueLength= strlen($string);

echo $valueLength . "<br>";


$values = ['sadfasf', 34355, 'rererer'];

$found = in_array($string, $values); // array_function


if($found) {

echo "Wow we did it together";

} else {

echo "We messed up, we could not find it";
}