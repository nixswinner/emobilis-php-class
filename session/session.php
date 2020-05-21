<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Session</title>
</head>
<body>
	<h1>Session</h1>
	<!-- <a class="btn btn-primary" href="session2.php">Next Page</a> -->

	<form action="" method="POST">
		<div class="form group">
			<input type="text" name="myname" placeholder="Enter name">
		</div>
<br>
		<div class="form group">
			<input class=" btn btn-primary"type="submit" name="save" value="Save">
		</div>
	</form>

</body>
</html>

<?php



	/*

=--->start App--|.........session..........|----end
	*/
session_start();//start we start initialize 


//creating a session - save my name
//$_SESSION['myname']="John Doe";


//retrieving a session variable
//echo $_SESSION['myname'];

if (isset($_POST['save'])) {
	//get the name 
	$name = $_POST['myname'];

	$_SESSION['myname']= $name;
	echo "<a href='session2.php'>Next Page</a>";
}


?>