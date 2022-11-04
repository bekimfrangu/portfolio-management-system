<?php
	include("check.php");	
?>
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['edit']))
{	
	$ID = $_POST['ID'];
	$Descr=$_POST['Descr'];
	$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	$maxsize = 10000000; //set to approx 10 MB
	// checking empty fields
	if(empty($Descr)) {	
			
		if(empty($Descr)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
			
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE bfpf_mnguser SET Descr='$Descr',imgData='$imgData',name='$name' WHERE ID=$ID");
		
		//redirectig to the display pimgData. In our case, it is admin.php
		header("Location: manageProjects.php");
	}
}
?>
<?php
//getting ID from url
$ID = $_GET['ID'];

//selecting data associated with this particular ID
$result = mysqli_query($conn,"SELECT * FROM bfpf_mnguser WHERE ID=$ID");

while($res = mysqli_fetch_array($result))
{
	$Descr = $res['Descr'];
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
										<form name="form1" method="post" action="editProject.php">
											<h3>Edit Project</h3>
											
											Name
											<input type="text" name="Descr" value='<?php echo $Descr;?>' />
											<br>
											
											<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
											<input name="userfile" type="file" />
											<br>
											<br>
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