<?php

print '<h1>My PHP File</h1>';
print '<br><br>';

class Dog {

	var $eyesColors = "Blue";
	var $noseColor = "black";
	var $furColor  = "brown";

	function ShowAll(){

		echo $this->eyesColors . "<br>";
		echo $this->noseColor . "<br>";
		echo $this->furColor . "<br>";
	}

}

$pitbull = new Dog();
$pitbull->ShowAll();