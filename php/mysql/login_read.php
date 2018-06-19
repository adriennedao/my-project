<?php 


$connection = mysqli_connect("localhost", "root", "", "loginapp");
	if($connection) {
	echo "We are connected";
	} else {
	die("Database connection failed");
	}


	$query = "SELECT * FROM users";

	$result = mysqli_query($connection, $query);

		if(!$result) {

			die('Query FAILED' . mysqli_error());
		

 	}


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


		<?php 

		while($row = 
		mysqli_fetch_assoc($result)) {


			?>

			<pre>

			<?php
			print_r($row);

			?>

			</pre>

			<?php

		}

		?>
</body>
</html>

