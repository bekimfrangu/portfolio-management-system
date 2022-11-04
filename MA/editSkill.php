<?php
	include("check.php");	
?>
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['edit']))
{	
	$ID = $_POST['ID'];
	$Skill=mysqli_real_escape_string($conn, $_POST['Skill']);
	$Percent=mysqli_real_escape_string($conn, $_POST['Percent']);
	$Class=mysqli_real_escape_string($conn, $_POST['Class']);	
	
	// checking empty fields
	if(empty($Skill) || empty($Percent) || empty($Class)) {	
			
		if(empty($Skill)) {
			echo "<font color='red'>Skill field is empty.</font><br/>";
		}
		
		if(empty($Percent)) {
			echo "<font color='red'>Percentage field is empty.</font><br/>";
		}
		
		if(empty($Class)) {
			echo "<font color='red'>Class field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE bfpf_mngskills SET Skill='$Skill',Percent='$Percent',Class='$Class' WHERE ID=$ID");
		
		//redirectig to the display pPercent. In our case, it is admin.php
		header("Location: manageSkills.php");
	}
}
?>
<?php
//getting ID from url
$ID = $_GET['ID'];

//selecting data associated with this particular ID
$result = mysqli_query($conn,"SELECT * FROM bfpf_mngskills WHERE ID=$ID");

while($res = mysqli_fetch_array($result))
{
	$Skill = $res['Skill'];
	$Percent = $res['Percent'];
	$Class = $res['Class'];
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
										<form name="form1" method="post" action="editSkill.php">
											<h3>Edit Skill</h3>

											Skill
											<input type="text" name="Skill" value='<?php echo $Skill;?>' />
											<br>
											Percentage
											<input type="text" name="Percent" value='<?php echo $Percent;?>' />
											<br>
											Class
											<input type="text" name="Class" value='<?php echo $Class;?>' />
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