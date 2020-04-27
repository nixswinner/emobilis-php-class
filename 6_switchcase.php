
<?php
/*echo "<h1>Switch Case </h1>";*/
/*

SYNTAX - how do we write switch case in php
*/
/*
Country a unique phone code
+254
Write a program in php which determine which country the calls come from depending on the country code
254 display Kenya
256 Uganda
1 USA
92 India
255 Tanzania
*/
if (isset($_GET['checkcode'])) {
	$phonecode=255;
	switch($phonecode){ // 
	case 254: 
	//statement
	echo "<br>Kenya";
	break;

	case 255:
	echo "<br>Tanzania";
	break;

	case 256:
	echo "<br>Uganda";
	break;

	case 92:
	echo "<br>India";
	break;
	default:
	echo "<br>Invalid Code";
	break;
}

}else{
	echo "No data ";
}




/*
x = 3
--
3- third
4 -fourth
5 -first

dont know
--

*/
$x ="677";
switch($x){
	//matching
	case "3":
	//perform 
		echo "<br>";
		echo "Third Value";
	break;

	case "4":
		echo "<br>";
		echo "Fourth Value";
		break;
	case "5":
		echo "<br>";
		echo "Fourth Value";
		break;
	default:
		echo "<br>I do not know that";
	break;
}


?>