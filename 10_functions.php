<?php
/*BLOCK of Statements 
echo hello; - code statement

-----
------
------
...
-----

Does a specific task.

COnsidering of our body anotomy
-
Eyes - Sight
Ears - listening
Arms - mobility


Types of functions.
1.Built - defined within the language help as devs to easily do the common. tasks.

2.User defined - function we define ,
we use , 

Syntax

$x=10;

function NameofThefuction(){
	//block of code
	-----
	------
	-----
}*/

//Display hello world using function

//creating a function
function sayHello(){
	//code to do something
	echo "Hello my fellow Devs<br>";
	echo "Another a beutiful Day <br>";
}

//work to do the specific
//to call,invoke the function

//To call a functions 
sayHello();
/*sayHello();
sayHello();
*/

//Write a program to add two numbers using a function

//60,39
function addTwoNumbers($a,$b){
	echo "Sum of $a and $b is <b>".($a+$b)."</b>";
	echo "<br><hr>";
}

function substractTwoNumbers($a,$b){
	echo "Substraction  of $b from $a is <b>".($a-$b)."</b>";
	echo "<br><hr>";
}

function convertMetersToCentimeters($value_in_meters){

	//1m = 100cm
	echo "$value_in_meters meters i";
	echo $value_in_meters*100;
	echo "cm <br>";

}

//convert 1.90 meters to centers
convertMetersToCentimeters(1.8986);

addTwoNumbers(60,20);
addTwoNumbers(80,30);
addTwoNumbers(1000,500);
addTwoNumbers(1200,543);

substractTwoNumbers(20,10);

function sayMyName($name="Nameless"){
	echo "I am ".$name."<br>";
}

sayMyName("John Doe");

sayMyName();

//Function Argurments - information we pass into a function 

/*

	->[ add two numbers ]

*/

?>