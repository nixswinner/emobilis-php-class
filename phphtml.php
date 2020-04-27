<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<h2>This File Contain Php</h2>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Numbers</th>
      <!-- <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th> -->
    </tr>
  </thead>
  <tbody>
  	<?php
  	$number =1;
  	while($number<=10){

  		
  		echo "
  		  <tr>
	     <center>
	     	<th scope='row'>$number</th>
	     </center> 
	     	<td scope='row'>$number</td>
    	</tr>";

    	$number++;
  	}
  	?>
    
    
  </tbody>
</table>

</body>
</html>