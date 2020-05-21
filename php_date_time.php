<?php

//date function - returns date and time 
//-server 
//two parameters
//format - 13/05/20 13-05-2020
//-timestamp - 
//$today = date('d');
echo date('l jS \of F Y h:i:s A');
date_default_timezone_set('UTC');

/*https://www.php.net/manual/en/function.date.php*/

$hour = date('h');
echo "<br>";
echo $hour;
if ($hour>00 && $hour<12)/*00--11*/ {
	echo "<br>Good Morning";
}else if($hour>=12 && $hour<16)/*12 ---15*/{
	echo "<br>Good Afternoon";
}else if($hour>=16 && $hour<20)/*16---19*/{
	echo "<br>Good Evening";
}else{
	echo"<br> Good Night";
}


?>