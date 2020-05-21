<?php 
$x=50;
$y=20;
$GLOBALS['x']=20;
$GLOBALS['y']=30;
	
function addNumbers(){
	/*global $x;
	global $y;
	$sum = $x+$y;*/
	$sum  = $GLOBALS['x']+$GLOBALS['y'];
	echo $sum."<br>";
}

addNumbers();

function substractNumbers(){
	/*global $x;
	global $y;
	$result = $x-$y;*/
	$result = $GLOBALS['x']-$GLOBALS['y'];
	echo $result."<br>";
}

substractNumbers();
/*echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];

echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];*/

//scope - boundary[ .....    ]

?>