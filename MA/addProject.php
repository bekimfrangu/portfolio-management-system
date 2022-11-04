<!DOCTYPE HTML>
<html>
<head>
		<title>PMS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>

<body>
	<?php
	//including the database connection file
	include_once("config.php");

	if(isset($_POST['add'])) {	
		$Descr = $_POST['Descr'];
		
		$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
		$name = $_FILES['userfile']['name'];
			$maxsize = 10000000; //set to approx 10 MB
		// checking empty fields
		if(empty($Descr)) {			
			if(empty($Descr)) {echo "<font color='red'>Name field is empty.</font><br/>";}
			
			//link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
			
		} else { 
			// if all the fields are filled (not empty) 
			//insert data to database	
			$result = mysqli_query($conn, "INSERT INTO bfpf_mnguser(Descr,image,name) VALUES('$Descr', '$imgData', '$name')");
			//display success messServiceDescword
		echo "<script>
			 setTimeout(function(){
				window.location.href = 'manageProjects.php';
			 }, 5000);
		  </script>";
			 echo"<p><b>The data has been successfully registered to the system. Please wait 5 seconds!<b></p>";
		}
	}
	?>
</body>
</html>