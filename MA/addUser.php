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
		$Username = mysqli_real_escape_string($conn, $_POST['Username']);
		$Pass = mysqli_real_escape_string($conn, md5($_POST['Pass']));
		$Email = mysqli_real_escape_string($conn, $_POST['Email']);
			
		// checking empty fields
		if(empty($Username) || empty($Pass) || empty($Email)) {			
			if(empty($Username)) {echo "<font color='red'>Username field is empty.</font><br/>";}
			if(empty($Pass)) {echo "<font color='red'>Password field is empty.</font><br/>";}
			if(empty($Email)) {echo "<font color='red'>Email field is empty.</font><br/>";}
			//link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
			
		} else { 
			// if all the fields are filled (not empty) 
			//insert data to database	
			$result = mysqli_query($conn, "INSERT INTO bfpf_user(Username,Pass,Email) VALUES('$Username','$Pass','$Email')");
			//display success messpassword
		echo "<script>
			 setTimeout(function(){
				window.location.href = 'users.php';
			 }, 5000);
		  </script>";
			 echo"<p><b>The data has been successfully registered to the system. Please wait 5 seconds!<b></p>";
		}
	}
	?>
</body>
</html>