
<?php

print '<h1>My PHP File</h1>';
print '<br><br>';

class Car {

	
	static $wheels = 4;
	var $hood = 1;

	function MoveWheels(){

		//$this->wheels = 10;
		Car::$wheels = 10; // for static
	}
}

$bmw = new Car();   // created instance of Car class

//$bmw->wheels;

Car::MoveWheels(); // to invoke, use the name of the method with class and ::

echo Car::$wheels;  //this is the correct way to render the output by using :: in static. Can use anywhere but must refer to class and ::



