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
		$Skill = mysqli_real_escape_string($conn, $_POST['Skill']);
		$Percent = mysqli_real_escape_string($conn, $_POST['Percent']);
		$Class = mysqli_real_escape_string($conn, $_POST['Class']);
			
		// checking empty fields
		if(empty($Skill) || empty($Percent) || empty($Class)) {			
			if(empty($Skill)) {echo "<font color='red'>Skill field is empty.</font><br/>";}
			if(empty($Percent)) {echo "<font color='red'>Percentage field is empty.</font><br/>";}
			if(empty($Class)) {echo "<font color='red'>Class field is empty.</font><br/>";}
			//link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
			
		} else { 
			// if all the fields are filled (not empty) 
			//insert data to database	
			$result = mysqli_query($conn, "INSERT INTO bfpf_mngskills(Skill,Percent,Class) VALUES('$Skill','$Percent','$Class')");
			//display success messPercentword
		echo "<script>
			 setTimeout(function(){
				window.location.href = 'manageSkills.php';
			 }, 5000);
		  </script>";
			 echo"<p><b>The data has been successfully registered to the system. Please wait 5 seconds!<b></p>";
		}
	}
	?>
</body>
</html>