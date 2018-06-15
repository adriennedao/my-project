<?php

if(isset ($_POST['submit'])) {

	$name = array("Edwin", "Student", "adrienne", "jonh", "jeff", "james", "maria");
	$minimum = 5;
	$maximum = 10;

$username =_POST['username'];
$password =_POST['password'];

	
//echo "Hello" . $username;
//echo "Your Password is " .$password;

	if(strlen($username) < minimum) {

		echo "Username has to be longer than five";
	
}

	if(strlen($username) > maximum) {

		echo "Username cannot be longer than ten";

}
	if(!in_array($username,$name)) {

		echo "Sorry you are not allowed";

} else {

	echo "Welcome";

	}

}

?>
