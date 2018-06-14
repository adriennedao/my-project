<?php

print '<h1>My PHP File</h1>';
print '<br><br>';

class Clock {

	var $startTime = '2:00'; 
	var $endTime   = '3:00';
	var $output    =  5;
	var $timepeace = 'gold';
	var $brand     = 'classic';
	var $watchColor= 'silver';

	function countChimes($startTime, $endTime){

		$startTime + $endTime =$ouput;

		echo $ouput;

 	}	

 	function CreateWatch(){

 		$this->watchColor = 'leather';

 	}

 }

$seiko = new Clock();


// check if the method works 
if(method_exists("Clock", "countChimes")) {


	echo "The Method Exist";

} else {

	echo "no it does not";
}



