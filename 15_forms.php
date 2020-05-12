<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<style type="text/css">
		form{
		border: 1px solid black;
		margin: 10px;
		padding: 20px;
		}
	</style>
</head>
<body>
	<h1>Say Hello</h1>
	<form action="15_forms.php" method="GET">
		<input type="text" name="person" required placeholder="What is your name?">
			<input type="number" name="age" required placeholder="What is your age?">
		<input type="submit" name="submit" value="Say Hello">
	</form>

</body>
</html>

<?php
/*
Form - action specifies where the input would be taken , what happens after the submit is clicked.
 method - specifies how the input data would be passed transports.
 - GET -  
 -POST

 Inputs - type - text,password,email,number
 name - identify the input value after clicking submit 
*/
 /*
	name=>"Jane"
 */
	//isset is function check if a given has be set
	if (isset($_GET['submit'])) {
		# code...
		$person_name = $_GET['person'];
		$age = $_GET['age'];
		echo "Good afternoon ".$person_name.". Welcome!!<br>";
		echo "$person_name is $age years old";
	}

/*
Create a Register Form which accepts 4 inputs 
First Name
Last Name
Email Address
County


Display the above captured records in a card

[Name : FirstName + Last Name]
[Email: Address]
[Location: ]
*/

?>