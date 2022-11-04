<?php
	session_start();
	include("config.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["Username"]) || empty($_POST["Pass"]))
		{
			$error = "Both fields are required.";
		}else
		{
			// Define $Username and $Pass
			$Username=mysqli_real_escape_string($conn, $_POST['Username']);
			$Pass=mysqli_real_escape_string($conn, md5($_POST['Pass']));
			//Check Username and Pass from database
			$sql="SELECT ID FROM bfpf_user WHERE Username='$Username' 
			and Pass='$Pass'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			//If Username and Pass exist in our database then create a session.
			//Otherwise echo error.
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['Username'] = $Username; // Initializing Session
				header("location: admPage.php"); // Redirecting To Other Page
			}else
			{
				$error = "Incorrect Username or Pass.";
			}
		}
	}
?>
