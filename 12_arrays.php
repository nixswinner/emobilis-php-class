<?php

// $name = "John"; //declaring 

// echo "$name<br>";

// //store all the names class


// Charles
// Sam
// Lynne
// Lawrence
// Crystal


// $namecharles;
// $namesam;

// $namelyne;

// $namecrystal;
// $namelawrence;

// //Arrays -

// $names = ""

//CREATING ARRAYS
/*
Strings ""
int 
float
double
hexa
*/
//Creating an array of names
$names = array("Charles","Sam","Lyne","Crystal","Lawrence","Alan","Margaret","Francis","Ekwam","John","Jane");


//INDEXED ARRAY

/*
names= 0 - 
	|Charles| Sam |Lyne|Crystal|Lawerence|
	0,1,2,3,4
*/
/*
1....
2.....
3.....
*/

//
//Square brackets [-index --] 0 - first value within 
//echo $names[0];


/*
1.What is an array.
2.How define an array
3.Types of array 
4.Indexed array the first value is always at position 0
5.$name_of_array[index]
*/

//we want to know how many values are within our array.
//built count
echo "<br>";
//echo (count($names));

//Display all the values within an array
//Loops - 0 --

echo "<u>Names of Classmates</u><br>";
//

$number_of_values = count($names);

for($position=0;$position<$number_of_values;$position++)

	//echo "$position<br>";
	echo $names[$position]."<br>";


//Display the above names in a table.
/*echo "<table border='1'>";
echo "<tr><th></th> <th>Name</th>";

for ($i=0; $i < $number_of_values; $i++) { 
	echo "<tr>";
	echo "<td></td>";
	echo "<td>".$names[$i]."</td>";

	echo "</tr>";
}

echo "</table>";*/
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title></title>
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
  
    </tr>
  </thead>
  <tbody>

  	<?php

  	for ($index=0; $index <$number_of_values ; $index++) { 
  		echo "
	<tr>
      <th scope='row'>$index</th>
      <td>$names[$index]</td>
    </tr>

  		";
  	}

  	?>
   
   
   
  </tbody>
</table>
</body>
</html>
