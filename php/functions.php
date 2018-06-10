<?php

print '<h1>My PHP File</h1>';
print '<br><br>';

function init() {

	say_Something();
	echo "<br>";
	calculate();
}
function calculate() {
	echo 456 + 345;
}
function say_Something() {

	echo "Hello Student, do you like the class?";
}

init();