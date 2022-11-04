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
		$Service = mysqli_real_escape_string($conn, $_POST['Service']);
		$ServiceDesc = mysqli_real_escape_string($conn, $_POST['ServiceDesc']);
		$ServiceClass = mysqli_real_escape_string($conn, $_POST['ServiceClass']);
			
		// checking empty fields
		if(empty($Service) || empty($ServiceDesc) || empty($ServiceClass)) {			
			if(empty($Service)) {echo "<font color='red'>Service field is empty.</font><br/>";}
			if(empty($ServiceDesc)) {echo "<font color='red'>Service Description field is empty.</font><br/>";}
			if(empty($ServiceClass)) {echo "<font color='red'>Service Class field is empty.</font><br/>";}
			//link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
			
		} else { 
			// if all the fields are filled (not empty) 
			//insert data to database	
			$result = mysqli_query($conn, "INSERT INTO bfpf_mngservices(Service,ServiceDesc,ServiceClass) VALUES('$Service','$ServiceDesc','$ServiceClass')");
			//display success messServiceDescword
		echo "<script>
			 setTimeout(function(){
				window.location.href = 'manageServices.php';
			 }, 5000);
		  </script>";
			 echo"<p><b>The data has been successfully registered to the system. Please wait 5 seconds!<b></p>";
		}
	}
	?>
</body>
</html>