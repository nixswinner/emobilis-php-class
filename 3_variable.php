<?php

/*Variables - storage

Think of 2 numbers , when you add the two , its results is a one of the numbers multiplied by 10.

Let numbers x and y
sum = x+y
sum = x*10 --i

Assign a label to those numbers, 

variables - temporary holding of some data to be used late on in the program

Enter age
Find out when the person was born

1.Age 18
2.Which year 2020
-
Calculate the year born 2020-18

//Terminologies in variables
1.Declare a variable
	age
2.Define
   assign a value 
   age=18*/

//How do we declare variables  in php?
/*Start with symbol of $ (dollar sign) followed by the name of the variable - {Rules -it should never start with numbers, alphabets _}*/

$age;
//define - assign a value = followed by the value
$age=17;
$thisyear=2020;

echo($thisyear-$age);
echo "<br>";

//simple calculator
//take 2 numbers
//set of arithmetic operations on the two
//{-,*./+}
//20 and 8

//two variables
$firstName="John";
$lastName = "Doe";
echo "Your full name is: ";
echo($firstName);
echo " ";
echo ($lastName);
echo "<br>";

//add ""- string . .(Period)
echo "Your full name is: ".$firstName." ".$lastName;

$num1="35";
$num2 = "7";


//substraction
echo "<br>";
echo "substraction of 10 and 2 = 8<br>";
//echo "substraction of ".;
echo($num1-$num2);


echo "<br>";
echo($num1*$num2);
echo "<br>";
echo($num1/$num2);
echo "<br>";
echo($num1+$num2);


?>
