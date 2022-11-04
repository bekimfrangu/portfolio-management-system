<?php
	include("check.php");	
?>
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['edit']))
{	
	$ID = $_POST['ID'];
	$Service=mysqli_real_escape_string($conn, $_POST['Service']);
	$ServiceDesc=mysqli_real_escape_string($conn, $_POST['ServiceDesc']);
	$ServiceClass=mysqli_real_escape_string($conn, $_POST['ServiceClass']);	
	
	// checking empty fields
	if(empty($Service) || empty($ServiceDesc) || empty($ServiceClass)) {	
			
		if(empty($Service)) {
			echo "<font color='red'>Service field is empty.</font><br/>";
		}
		
		if(empty($ServiceDesc)) {
			echo "<font color='red'>Service Description field is empty.</font><br/>";
		}
		
		if(empty($ServiceClass)) {
			echo "<font color='red'>Service Class field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE bfpf_mngServices SET Service='$Service',ServiceDesc='$ServiceDesc',ServiceClass='$ServiceClass' WHERE ID=$ID");
		
		//redirectig to the display pServiceDesc. In our case, it is admin.php
		header("Location: manageServices.php");
	}
}
?>
<?php
//getting ID from url
$ID = $_GET['ID'];

//selecting data associated with this particular ID
$result = mysqli_query($conn,"SELECT * FROM bfpf_mngServices WHERE ID=$ID");

while($res = mysqli_fetch_array($result))
{
	$Service = $res['Service'];
	$ServiceDesc = $res['ServiceDesc'];
	$ServiceClass = $res['ServiceClass'];
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
										<form name="form1" method="post" action="editService.php">
											<h3>Edit service</h3>

											Service
											<input type="text" name="Service" value='<?php echo $Service;?>' />
											<br>
											Service Description
											<textarea rows="6" cols="5" name="ServiceDesc" ><?php echo $ServiceDesc;?></textarea>
											<br>
											Service Class
											<input type="text" name="ServiceClass" value='<?php echo $ServiceClass;?>' />
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