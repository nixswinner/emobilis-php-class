<?php
//CONDITIONAL STATEMENTS

//CONDITION
//get drivers license - 
//age above 18
//national id/ passport
//national id - get an id
//- above 18 years

//Get zoom sessions 
//- Internet connections
//power 
//programming - talk 
// Login to FB- Accounts
//sign up or sign in 
// phone username and password 

//COMMON CONDITIONAL STATEMENTS
/*
if.... // a confition is true we then execute

if(condition){
	//
}

if....else //2 condition 1 or the other
if(condition){
	//execute
}else{
	
}

if ....else if .....else

switch

*/

//if
$age = 74;
//problem determine whether the above line 32 is either an adult or a child adult => 18 child anyone below 18 years
//if statement it takes one condition 
//syntax
///x and y 18 and age
if($age>18){ //true 19>18 - true 
	//() 10>18 - false
	//what is going to be executed once the condition is met is true
	//echo "Welcome to Adults Club";
}

if($age<18){//19<18 - false
	//10<18 - true
	//echo "Welcome to Kids Club";
}

//profiling per age group 
//depending their age and comparing it to base age 18

//condition if >=18 adult and if <18 child
//DRY Do not Repeat Yourself
//Code Smell - 
if($age<18){
	echo "I am a child";
}else{
	echo "I am an Adult";
}
$gender="M";

if($gender=="F"){
	echo "<br> I am Female";
}else{
	echo "<br> I am Male";
}

//Lets say we need to profile people per age group

//infant, kid ,teen ,youth , senior adult
//below 1 year old - infant, kid 2-12, 13-19 - teens 20 -35 youth , 35-above  
/*
syntax
if(condition){
	
}else if(condition){
	
}else if(condition)
...
{
	
}else{
	
}
*/
if ($age<=1) {
	echo "<br> An Infant";
}else if($age>=2 and $age<=12){
//2 - ... 12
echo "<br> A Kid";
}else if($age>=13 and $age<19){
	echo "<br> A Teen";
}else if($age>=19 and $age<=35){
	echo "<br> A Youth";
}else{
	echo "<br>A senior adult";
}

//First Problem...
//Write a php program , given a number x , check if it even or odd number 
//even - number %2 

//Second Problem...
//Write a program that is going to grade a given subject mark you scored i.e 
/*
A -70 and above
B - 60 - 69
C- 50 - 59
D - 40 - 49
F - 40 and below
*/




?>