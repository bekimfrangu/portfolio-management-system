<?php
	include("check.php");	
?>
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['edit']))
{	
	$ID = $_POST['ID'];
	$Subject=mysqli_real_escape_string($conn, $_POST['Subject']);
	$Code=mysqli_real_escape_string($conn, $_POST['Code']);
	$Pos=mysqli_real_escape_string($conn, $_POST['Pos']);	
	
	// checking empty fields
	if(empty($Subject) || empty($Code) || empty($Pos)) {	
			
		if(empty(Subject)) {
			echo "<font color='red'>Subject field is empty.</font><br/>";
		}
		
		if(empty($Code)) {
			echo "<font color='red'>Code Description field is empty.</font><br/>";
		}
		
		if(empty($Pos)) {
			echo "<font color='red'>Position field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE bfpf_info SET Subject='$Subject',Code='$Code',Pos='$Pos' WHERE ID=$ID");
		
		//redirectig to the display pServiceDesc. In our case, it is admin.php
		header("Location: manageData.php");
	}
}
?>
<?php
//getting ID from url
$ID = $_GET['ID'];

//selecting data associated with this particular ID
$result = mysqli_query($conn,"SELECT * FROM bfpf_info WHERE ID=$ID");

while($res = mysqli_fetch_array($result))
{
	$Subject = $res['Subject'];
	$Code = $res['Code'];
	$Pos = $res['Pos'];
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
							<header id="header">

								<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
							</header>
								
							<section id="banner">
									<div class="content">
										<header>
											 <h1>Portfoliio Mangement System</h1> 
										</header> 
									</div>
							</section>
							
							<!-- Section -->
							<section>		
								<p style="text-align: right;">Welcome, <em><?php echo $login_user;?>!</em></p> 
								<div class="row gtr-200">
									<div class="col-6 col-12-medium">
										<form name="form1" method="post" action="editData.php">
											<h3>Edit Data</h3>

											Subject
											<input type="text" name="Subject" value='<?php echo $Subject;?>' />
											<br>
											Code
											<textarea rows="6" cols="5" name="Code" ><?php echo $Code;?></textarea>
											<br>
											Position
											<input type="text" name="Pos" value='<?php echo $Pos;?>' />
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