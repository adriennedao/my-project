
<?php

print '<h1>My PHP File</h1>';
print '<br><br>';

class Car {

	var $wheels = 4;  // how to use property inside the class 
	var $hood = 1;
	var $engine = 1;
	var $doors = 4;



	function __construct(){

		echo $this->wheels = 10; 

	}

}


$bmw = new Car();   // created instance of Car class
$truck = new Car();
$semi = new Car();



