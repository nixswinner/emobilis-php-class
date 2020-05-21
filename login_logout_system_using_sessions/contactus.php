<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<?php require('boostrap.php');?>
</head>
<body>
	<?php require('navbar.php');?>
	<h1>Contact Us</h1>
	<?php
	if (isset($_SESSION['username'])) {
		
	}else{
		header('location:index.php');
	}
	?>

</body>
</html>