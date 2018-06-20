<?php 

if(isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];

$connection = mysqli_connect("localhost", "root", "", "loginapp");

	if($connection) {

		echo "We are connected";

	} else {

		die("Database connection failed");

	}

	$query = "INSERT INTO users(username, password) ";

	$query .= "VALUES ('$username', '$password')";

	mysqli_query($connection, $query);

	$result = mysql_query($connection, $query);

		if(!$result) {

			die('Query FAILED' . mysql_error());
		}

 }
	//if($username && $password) {

	//echo $username;
	//echo $password;


	//} else {

	//	echo "This field cannot be blanked";
//	}
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<body>

	<div class="container">

		<div class="col-sm-6">
			
		</div>


</body>
</html>

