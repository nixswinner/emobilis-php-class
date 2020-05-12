<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<h1>My Simple Calculator</h1>
	<form action="" method="POST">
		<div class="form-group">
    <label for="exampleInputEmail1">First Number</label>
    <input type="number" name="a"class="form-control" >
  </div>
			<div class="form-group">
    <label for="exampleInputEmail1">Second Number</label>
    <input type="number" name="b"class="form-control" >
<!-- Using select operation -->
    <select name="operation">
		<option value="+">Addition</option>
		<option value="-">Substraction</option>
		<option value="*">Multiplication</option>
		<option value="/">Division</option>
</select>

  </div>
		  <button type="submit" name="calculate" class="btn btn-primary">Calculate</button>
	</form>

</body>
</html>

<?php

if (isset($_POST['calculate'])) {
	//get values of the inputs
	$num1 = $_POST['a'];
	$num2 = $_POST['b'];
	$operation = $_POST['operation'];
	switch ($operation) {
		case '+':
			echo "The sum is <b>".($num1+$num2)."</b> <br>";
			break;
			case '-':
			echo "The Substraction is <b>".($num1-$num2)."</b> <br>";
			break;
			case '*':
			echo "The Multiplication is <b>".($num1*$num2)."</b> <br>";
			break;
			case '/':
			echo "The Division is <b>".($num1/$num2)."</b> <br>";
			break;
		
		default:
			echo "No operation Selected<br>";
			break;
	}

	
	
	
}

?>