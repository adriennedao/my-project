<?php

print '<h1>My PHP File</h1>';
print '<br><br>';

class Clock {

	var $startTime = '12:00';
	var $endTime   = '15:00';
	var $output	   =  5;
	var $timepeace = 'gold';
	var $brand     = 'classic';
	var $watchColor= 'silver';

	function countChimes($startTime, $endTime) {

		$output = 2+3;	

		echo $output . "<br>";
 	}
 	
 	function CreateWatch(){

 		$this->watchColor = 10;
 	}

 } 

$seiko = new Clock();
$seiko->countChimes('06:00','13:00');	

//$start = new Date();
//$startkv->format('g');
echo $seiko->CreateWatch();


// check if the method works 

if(method_exists("Clock", "countChimes")) {


	echo "The Method Exist";

} else {

	echo "no it does not";
}

print "<br>";

// created class inheritance from entends Clock class

class Bracelet extends Clock {

	var $brand = 'seiko';
	var $watchColor = 'diamond'; 

}

$jewelry = new Bracelet();
$brand	 = new Bracelet();

echo $jewelry->brand . "<br>";
echo $brand->timepeace . "<br>";


// created static class  

	static $timepeace = 'gold';
	//var $brand = 'classic';

	function MadeNewWatch() {

		Clock::$timepeace = 'diamond';
	}

$guci = new Clock();

