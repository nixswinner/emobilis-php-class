<?php 
/*
Create a multiplication table of numbers between 0 and 9
The output is shown below

*/
echo "<h1>Multiplication Table <br></h1>";

//Objective - us 
//use loops
//nested loops 

for ($i=1; $i <=12  ; $i++) { 
	//i=1
	for ($j=0; $j <=9 ; $j++) { 
		echo "$i X $j = ".$i*$j;
		echo "<br>";
	}
	echo "<hr>";
}

/*for ($i=1; $i <=9 ; $i++) { 
	for ($j=0; $j <=9 ; $j++) { 
		
		echo $i." X ".$j." = ".$i*$j;
		if ($j==9) {
			echo "<hr>";
		}
		echo "<br>";
	}
}*/
?>