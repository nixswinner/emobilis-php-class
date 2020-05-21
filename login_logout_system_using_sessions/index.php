<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<?php require('boostrap.php');?>
</head>
<body>
	<center>

	<form style="width: 400px" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">user name</label>
    <input type="text" name="username"class="form-control" required>
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" required>
  </div>
  
  <button type="submit" name = "login"class="btn btn-primary">Login</button>
</form>

</center>

</body>
</html>

<?php
if (isset($_POST['login'])) {
	//get the values
	//username and password
	$username = $_POST['username'];
	$password = $_POST['password'];
	//echo strlen($username);
	//nested condition
	if (strlen($username)>=6) {
		
		if(strlen($password)>=8){

		//both username and password are valid
			/*echo "$username<br>";
				echo "$password<br>";*/
				session_start();
				$_SESSION['username']=$username;

				header('location:home.php');


		}else{
		echo "<b style='color:red'>Invalid password.Must 8 characters and above</b>";
	}
	}else{
		echo "<b style='color:red'><br>User name must be 6 characters and above</b>";
	}



	
}

?>