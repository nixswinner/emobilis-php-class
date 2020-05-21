<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Page 2</title>
</head>
<body>
	<h1>Page 2</h1>
	<p>
		Welcome dear <?php echo $_SESSION['myname']; ?>
	</p>

	<a href="session3.php">Next Page</a>

</body>
</html>
