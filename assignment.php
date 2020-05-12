<?php
	$names=[];
	$genders=[];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Assignment</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="alert alert-primary" role="alert">
<center> <h2>User Registrations</h2></center>
</div>

	<div class="container">

  <div class="row">
  	<!-- form -->
    <div class="col-4">
    	<form action="" method="POST">
		<div class="form-group">
		    <label for="exampleInputEmail1">First Name</label>
		    <input type="text" required name="first_name"class="form-control" >
 		 </div>
			<div class="form-group">
	    <label for="exampleInputEmail1">Second Name</label>
	    <input type="text" name="second_name" required class="form-control" >
	</div>
	<!-- Using select operation -->
	<div class="form-group">
	  <label for="exampleInputEmail1">Select Gender</label>
	    <select name="gender" class="form-control">
			<option value="male">Male</option>
			<option value="female">Female</option>
	</select>
	</div>
		<button type="submit" name="save" class="btn btn-primary">Save</button>
	</form>

  </div>
		  

    <!-- table -->
    <div class="col-8">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col"></th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark Otto</td>
      <td></td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob Thornton</td>
      <td></td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td></td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

    </div>
</div>

</body>
</html>

<?php 
if (isset($_POST['save'])) {
	$name = $_POST['first_name']." ".$_POST['second_name'];
	$gender = $_POST['gender'];

	//echo "$name<br>";
	
	//$names = $names+array($name);
	$genders = $genders+array($gender);

	array_push($names, $name);
	showUsers();
	//echo count($names);
	//var_dump($names);


	
}

function showUsers(){
	/*if (count($users)>0) {

	}else
	{
		echo "<br>No Users";
	}*/

	
	
}
?>