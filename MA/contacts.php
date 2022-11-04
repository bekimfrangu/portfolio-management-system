<?php
	include("check.php");	
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

						
							<!-- Banner -->
							<?php include_once("header.php"); ?>
								

							



							<!-- Section -->
								<!-- Form -->

			<section>
				 <p style="text-align: right;">Welcome, <em><?php echo $login_user;?>!</em></p>
					<div class="row gtr-200">
						<div class="col-8 col-12-medium">
				
						<form action="" method="post">  
						
						<table>
						<tr>
							<h3>Search contact to delete</h3>
						</tr>
						<tr>

						<td>
							Write:
						</td>
						<td>
							<input type="text" name="term" placeholder="Subject or Message"/>
						</td>
							<td> <input type="submit" value="Search" /></td>
						</tr>
						</table>
						</form>
						</div>
				<div class="col-12">
					<table>

						<tr>
							<td>Name</td>
							<td>Email</td>
							<td>Subject</td>
							<td>Message</td>
							
							<td>Delete</td>
						</tr> 

					<?php
						if (!empty($_REQUEST['term'])) {

						$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     

						$sql = mysqli_query($conn,	
					"SELECT ID,
						Name,
						Subject, Message, Email FROM 
						bfpf_contact
						WHERE
						Subject LIKE '%".$term."%' OR Message LIKE '%".$term."%'"
						); 

						while($row = mysqli_fetch_array($sql)) { 		
								echo "<tr>";
								echo "<td>".$row['Name']."</td>";
								echo "<td>".$row['Email']."</td>";
								echo "<td>".$row['Subject']."</td>";
								echo "<td>".$row['Message']."</td>";
								
								echo "<td><a href=\"deleteContact.php?ID=$row[ID]\" onClick=\"return confirm('Are you sure you want to delete the contact?')\" class='button'
														class='button primary'>Delete</a> </td></tr>";			
							}

						}

						?>
						</table>
						</div>
				</div>
					
			</section>
							<!-- Section -->
							

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								

							<!-- Menu -->
							<?php include_once("meny.php"); ?>

							<!-- Section -->
								

							<!-- Section -->
							<?php include_once("footer.php"); ?>

							<!-- Footer -->
							


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