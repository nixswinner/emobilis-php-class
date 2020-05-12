<?php

//show numbers display numbers from 1 to 10
/*echo "1<br>";
echo "2<br>";
echo "3<br>";
echo "4<br>";
echo "5<br>";
echo "6<br>";

echo "10<br>";*/

// show all 10 1 -10 
$number =1;
$oddnumber="";
//++ 
echo "Even Numbers<br>";
while($number<=20){
	//code block 
	//even 
	//
	if (($number%2)==0) {
		//even number
		echo $number."<br>";
	}else{
		$oddnumber=$oddnumber.$number."<br>";
	}
	//echo $number."<br>";
	$number++;
}
/*echo "Odd Numbers are:<br>";
echo $oddnumber;
*/
/*$oddnumber =1;
echo "Odd Numbers<br>";
while($oddnumber<=20){
	//code block 
	//even 
	//
	if (($oddnumber%2)>0) {
		//even number
		echo $oddnumber."<br>";
	}
	//echo $number."<br>";
	$oddnumber++;
}*/
/*
$number   value   loop
			1      1
			2
			3
			4
			5
			.
			8
			9
			10
			11
*/
/*Using the above display even and odd numbers between 0-20*/
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Odd Numbers</h5>
    	<?php echo $oddnumber;?>
  </div>
</div>

</body>
</html>