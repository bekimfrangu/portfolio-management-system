<?php
	include("check.php");	
?>
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['edit']))
{	
	$ID = $_POST['ID'];
	$Username=mysqli_real_escape_string($conn, $_POST['Username']);
	$Pass=mysqli_real_escape_string($conn, MD5($_POST['Pass']));
	$Email=mysqli_real_escape_string($conn, $_POST['Email']);	
	
	// checking empty fields
	if(empty($Username) || empty($Pass) || empty($Email)) {	
			
		if(empty($Username)) {
			echo "<font color='red'>Username field is empty.</font><br/>";
		}
		
		if(empty($Pass)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		
		if(empty($Email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE bfpf_user SET Username='$Username',Pass='$Pass',Email='$Email' WHERE ID=$ID");
		
		//redirectig to the display pPass. In our case, it is admin.php
		header("Location: users.php");
	}
}
?>
<?php
//getting ID from url
$ID = $_GET['ID'];

//selecting data associated with this particular ID
$result = mysqli_query($conn,"SELECT * FROM bfpf_user WHERE ID=$ID");

while($res = mysqli_fetch_array($result))
{
	$Username = $res['Username'];
	$Pass = $res['Pass'];
	$Email = $res['Email'];
}
?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>PMS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<?php include_once("header.php"); ?>
							
							<!-- Section -->
							<section>		
								<p style="text-align: right;">Welcome, <em><?php echo $login_user;?>!</em></p> 
								<div class="row gtr-200">
									<div class="col-6 col-12-medium">
										<form name="form1" method="post" action="editUser.php">
											<h3>Edit user's info</h3>

											Username
											<input type="text" name="Username" value='<?php echo $Username;?>' />
											<br>
											Password
											<input type="text" name="Pass" value='<?php echo $Pass;?>' />
											<br>
											Email
											<input type="text" name="Email" value='<?php echo $Email;?>' />
											<br >
											<input type="hidden" name="ID" value='<?php echo $_GET['ID'];?>' />
											<input type="submit" name="edit" value="Edit" class="primary">
							
										</form>
									</div>
								</div>
							</section>

						</div>
					</div>

					
				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">
							<!-- Menu -->
							<?php include_once("meny.php"); ?>

							<?php include_once("footer.php"); ?>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>