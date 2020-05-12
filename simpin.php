<?php

/*echo "<input type='password' placeholder='Enter Pin'/>";
echo "<input type='submit' value='OK'/>";*/

$trials = 2;
$actualpin ="0000";
$pinentered="0006";



do{

echo "<br>";

echo "Enter Pin<br>";
echo "Pin Entered: ".$pinentered;
if ($pinentered==$actualpin) {
	echo "<br>Welcome";
	$trials=0;
}else{
	echo "<br>Start of Trials";
	echo "<br>Wrong Pin Try again<br>";
	echo "".$trials." Trials Remaining";
	echo "<br><br><hr><br>";

	$trials--;
}



}while ($trials>0);

echo "<br>End.........";

?>