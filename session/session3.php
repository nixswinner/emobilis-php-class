<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Page 3</title>
</head>
<body>
	<h1>Page 3</h1>
	<p>
		Welcome dear <?php echo $_SESSION['myname']; ?>
	</p>


	<a href="session2.php">Go Back</a>
	<form method="POST">
		<input style="color:red;"class='btn btn-link'type="submit" name="session_clear" value="Clear Session">
	</form>

</body>
</html>
<?php
if (isset($_POST['session_clear'])) {
	session_destroy();
	header('location:session.php');//go to specific page
}

?>