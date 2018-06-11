
<?php

print '<h1>My PHP File</h1>';
print '<br><br>';

class Car {

	public $wheels = 4;  // how to use property inside the class 
	protected $hood = 1;
	private $engine = 1;
	var $doors = 4;

	function showProperty(){

		echo $this->hood;

	}
}

$bmw = new Car();   // created instance of Car class
$semi = new Semi();

class Semi extends Car {
	

}

echo $bmw->showProperty();





