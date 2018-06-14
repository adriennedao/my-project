<?php

print '<h1>My PHP File</h1>';
print '<br><br>';

class Car {

	var $wheels = 4;  // how to use property inside the class 
	var $hood = 1;
	var $engine = 1;
	var $doors = 4;

	function MoveWheels(){

		//echo "Wheels move";
		$this->wheels = 10; // $this refers to as key name to class Car
	}


	function CreateDoors(){

		$this->doors = 6; 

	}

}

$bmw = new Car();   // created instance of Car class
$bmw->MoveWheels(); // call the method
$bmw->wheels = 8;
$truck = new Car();

	echo $bmw->wheels . "<br>"; // no $ sign on Wheels here, lower case

	echo $truck->wheels = 10 . "<br>";

	$truck->CreateDoors();

	echo $truck->doors;

$bmw->MoveWheels(); // instanciated from the Class Car
					// assigned instance to the variable


//$merces_benz->MoveWheels();

//$bmw->MoveWheels();

if(method_exists("Car", 
	"MoveWheels")) {

	echo "The Method Exist";

//} else {

//	echo "no it does not";
//}

class Plane extends Car {

	var $wheels = 20;

}

$jet = new Plane();

//$jet->MoveWheels();

echo $jet->wheels; // it inherited the wheel from class Car


//if(class_exists("Plane")) {

//	echo "it does";


//}