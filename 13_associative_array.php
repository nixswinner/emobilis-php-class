<?php
echo "Associative array <br>";
/*
Index array -  array("Banana","Oranges")
0-banana
1-oranges

-John ,Jane 
-Swimming , Reading

*/
$hobbies = array("john"=>"swimming","jane"=>"reading",
"moses"=>"travelling","sue"=>"watching");
/*$age = array(0=>12,1=>13,2=>14);

for ($i=0; $i <count($age) ; $i++) { 
	echo "$age[$i] <br>";
}*/

//echo "Jane Hobby is ".$hobbies["jane"];

//looping

//Foreach loop is meant that are in a list or arrays.

echo "<br>";
foreach ($hobbies as $key => $value) {
	echo "$key - $value <br>" ;
}

echo "<br>";
$students_ages = array("John"=>16,"Jane"=>17,"Moses"=>18);

//echo $students_ages["Jane"];

foreach($students_ages as $name=>$age){
	echo "$name is $age years old<br>";
}

?>