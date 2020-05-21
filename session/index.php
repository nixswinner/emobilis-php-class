<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<?php
	include 'boostrap.php';
	?>

</head>
<body>

	<form action="" method="POST">

 <div class="form-group">
    <label for="exampleFormControlInput1">Full Name</label>
    <input type="text" class="form-control" name="fullname"placeholder="Full Name" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select County</label>
    <select class="form-control" name="county" id="exampleFormControlSelect1">
      <option>Nairobi</option>
      <option>Mombasa</option>
      <option>Kisumu</option>
      <option>Kilifi</option>
      <option>Mandera</option>
    </select>
  </div>
  <div class="form-group">
    <input type="submit" name="btnSave"class="btn btn-primary" value="Save">
  </div>


</body>
</html>

<?php

if (isset($_POST['btnSave'])) {
	
	//get the details - name,email,county
	$name = $_POST['fullname'];
	$email = $_POST['email'];
	$county = $_POST['county'];

	$_SESSION['name']=$name;
	$_SESSION['email']=$email;
	$_SESSION['county']=$county;

	header('location:details.php');

/*	echo $name.'<br>';
	echo $email.'<br>';
	echo $county.'<br>';*/
}

?>