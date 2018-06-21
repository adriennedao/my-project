<?php include "db.php";?>
<?php

function showAllData() {

	global $connection;
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	if(!$result) {
			die('Query FAILED' . mysqli_error());	
 	}

 	while($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];


	echo "<option value='$id'>$id</option>";

	}
}

function UpdateTable(){
global $connection;
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$query = "UPDATE users SET ";
$username = $_POST['username'];
$password = $_POST['password'];
$query .= "WHERE id = $id ";

	$result = mysqli_query($connection, $query);
	if(!$result) {

		die("QUERY FAILED" . mysql_error($connection));

	}

}


function deleteRows(){
global $connection;
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$query = "DELETE FROM users  ";
$query .= "WHERE id = $id ";

	$result = mysqli_query($connection, $query);
	if(!$result) {

		die("QUERY FAILED" . mysql_error($connection));

	}

}

?>