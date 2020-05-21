<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<form action="" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">File </label>
    <input type="file" class="form-control" name="myfile"aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">My Image Files</small>
  </div>
 
  <button type="submit" name="btnUpload" class="btn btn-primary">Upload</button>
</form>

</body>
</html>


<!-- 
 input type - number
 email
submit
file
 -->

 <?php

 	if (isset($_POST['btnUpload'])) {
 		# code...
 		//
 		$fileName = $_FILES['myfile']['name'];
 		$uploadLocation = "uploads/";
 		$targetFile = $uploadLocation.basename($fileName); //get the path

 		//images - jpeg,jpg,png
 		$validImageTypes = array("jpeg","jpg","png");

 		//echo "$targetFile<br>";
 		//$name ="JOHN";
 		//echo "".strtolower($name);

 		$fileextension = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION)); //.pdf

 		//validate
 		if(in_array($fileextension, $validImageTypes)){


 			echo "Valid  Image<br>";
 			//--
 		
 			$isuploaded = move_uploaded_file($_FILES['myfile']['tmp_name'], $targetFile);
 			if($isuploaded==true){
 				echo "uploaded successfully<br>";

 				echo "<img src='uploads/$fileName'width='200px' height='150px'>";
 			}else{
			echo "failed to upload<br>";
 			}
 		}else
 		{
 			echo "Invalid Image<br>";
 		}

 	/*	echo "My File Name is ".$fileName;

 		echo "<br>";
 		echo" My File Size ".$_FILES['myfile']['size']; //bytes 1 byte = 1000kb 
 		echo "<br>";

 		echo" The file type is ".$_FILES['myfile']['type']; //bytes */ 

 		/*if(file_exists($fileName)){
 			echo "File has been uploaded<br>";
 		}else{
 			echo "Oops! not uploaded<br>";
 		}*/

 	}

 ?>