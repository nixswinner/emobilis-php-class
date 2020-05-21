<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
	<?php
	require('boostrap.php');
	?>
</head>
<body>

	<div class="card" style="width: 28rem;">
  <div class="card-body">
    <h5 class="card-title">My Details</h5>
    <p class="card-text">
    	<b>Name:</b> <?php echo($_SESSION['name'])?><br>
    	<b>Email:</b> <?php echo($_SESSION['email'])?><br>
    	<b>County:</b> <?php echo($_SESSION['county'])?>
    </p>
    <a href="index.php" class="btn btn-primary">Go Back</a>
  </div>
</div>

</body>
</html>