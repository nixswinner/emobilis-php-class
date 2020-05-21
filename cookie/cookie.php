<?php
echo "<h1>PHP COOKIE</h1><br>";

/*

Creating a cookie
We use a function setcookie(
-name {--identify } username
-value - John
-expiry - 60*60 = 3600s expires in an hours time
-path - 
-domoin
-secure
)
*/
//creating a cookie by tthe name user - user=-name
$user = "Jane";//value
setcookie("myuser",$user,time()+60*1,'/');//creating a cookie
//accessing /retrieving record within php.

//$_COOKIE['name_of_cookie created']

$mycookievalue = $_COOKIE['myuser'];
echo "Cookie value is ".$mycookievalue;

/*
1.What is a cookie.
2.Use case.
3.Create a cookie
- setcookie(-name,value,expiry - seconds time()+60*60*24,'/',)
4.Getting the cookie value - 
	superglobals - $_COOKIE['-name']

*/

?>