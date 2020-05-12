<?php 

function convertMetersToCentimeters($value_in_meters/*argurment - */){

	//1m = 100cm
	echo "$value_in_meters meters is ";
	echo $value_in_meters*100;
	echo " cm <br>";

}

//convert 1.90 meters to centers
//convertMetersToCentimeters(67);


//Functions Return

/*
	|---ATM---| dispense cash

	->card together with valid pin (arguments -)

*/

	function ATM($card,$pin){

		return "Cash dispensed";

	}

	//
	function greetMe(){
		return "Good Afternoon";
	}

	
/*	$result = ATM("mycard","0000");
	echo "$result";
	echo "<br>";
*/
//greetMe();
//echo greetMe();

	//echo(ATM("mycard","0000"));


function convertKMToMiles($distance_in_km){
	//1 km - 0.62137miles
	$in_miles = $distance_in_km*0.621371;
	return $in_miles;
}


$myresult = convertKMToMiles(14)*10;

//echo "$myresult miles";

///

//

//add($,$),substraction(),multiplicatlication(),division()

/*
+ add
- 
/
*
*/


function calculate($x,$y,$operator){
	//conditional  statement 
	/*if ($operator =="-") {
		echo " $x  $operator $y = ".minus($x,$y);
	}else if  ($operator =="+") {
		echo " $x  $operator $y = ".add($x,$y);
	}else if  ($operator =="/") {
		echo " $x  $operator $y = ".division($x,$y);
		# code...
	}else if  ($operator =="*") {
		echo " $x  $operator $y = ".multiply($x,$y);
	}else{
		echo("Invalid");
	}*/

	switch ($operator) {
		case '-':
			echo " $x  $operator $y = ".minus($x,$y);
			echo "<br>";
			break;

			case '+':
			echo " $x  $operator $y = ".add($x,$y);
			echo "<br>";
			break;

			case '/':
			echo " $x  $operator $y = ".division($x,$y);
			echo "<br>";
			break;

			case '*':
			echo " $x  $operator $y = ".multiply($x,$y);
			echo "<br>";
			break;
		
		default:
			echo "Invalid operator";
			break;
	}


}

function add($x,$y){
	return $x+$y;
}

function minus($x,$y){
	return $x-$y;
}

function multiply($x,$y){
	return $x*$y;
}

function division($x,$y){
	return $x/$y;
}

$num1 =20;
$num2=20;
calculate($num1,$num2,"*");
calculate($num1,$num2,"-");
calculate($num1,$num2,"+");
calculate($num1,$num2,"/");

?>