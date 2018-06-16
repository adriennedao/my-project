
<?php
print '<h1>My PHP File</h1>';
print '<br><br>';


if(isset($_POST['submit'])) {

	echo $_POST['submit'];

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

	<form action="6.php" method="post">
		<input type="submit" name="submit" value="SUBMIT">

<br>
</form>


</body>
