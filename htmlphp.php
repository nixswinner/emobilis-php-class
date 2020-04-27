<!DOCTYPE html>
<html>
<head>
	<title>PHPHTML</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

	<div class="alert alert-primary" role="alert">
  <?php
   echo"Hello PHP";

  ?>
</div>
<?php 
	$card_title="My Card in Php";
	$card_text = "Quick Text in PHP";
	$age = 20;
	$agetitle;
	if ($age>=18) {
		$agetitle="Adult";
	
	}else{
		$agetitle="Kid";
	}
?>

<div class="card"  style="width: 18rem; background-color: cyan; color: red;">
  <div class="card-body">
    <h5 class="card-title">
    	<?php echo($card_title);?></h5>
    <p class="card-text">
    	<?php echo($card_text);?><br>
    	<?php echo ($agetitle);?>
    .</p>

    <a href="datatypes.php" class="btn btn-primary" style="color:red; background-color: black; border: 1px solid yellow;">Go somewhere</a>
  </div>
</div>

</body>
</html>