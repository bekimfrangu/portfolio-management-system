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
								
						<section>
						
							<p style="text-align: right;">Welcome, <em><?php echo $login_user;?>!</em></p> 
							<!-- Section -->
							
								<div class="row gtr-200">
									
									<div class="col-8 col-12-medium">
				
										<form action="" method="post">  
										
										<table>
										<tr><br>
											<h3>Search Data to edit</h3>
										</tr>
										<tr>

										<td>
											Write:
										</td>
										<td>
											<input type="text" name="term" placeholder="Subject or Position"/>
										</td>
											<td> <input type="submit" value="Search" class="primary"/></td>
										</tr>
										</table>
										</form>
									</div>
									
									<div class="col-12">
										<table>

											<tr>
												<td>Subject</td>
												<td>Code</td>
												<td>Position</td>
												
												<td>Edit</td>
											</tr> 

										<?php
											if (!empty($_REQUEST['term'])) {

											$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     

											$sql = mysqli_query($conn,	
												"SELECT ID,
												Subject,
												Code,
												Pos FROM 
												bfpf_info
												WHERE
												Subject LIKE '%".$term."%' OR Pos LIKE '%".$term."%'"
												); 

											while($row = mysqli_fetch_array($sql)) { 		
													echo "<tr>";
													echo "<td>".$row['Subject']."</td>";
													echo "<td>".$row['Code']."</td>";
													echo "<td>".$row['Pos']."</td>";
													
													echo "<td><a href=\"editData.php?ID=$row[ID]\" class='button' class='primary'>
																			Edit</a></td></tr>";
												}

											}

											?>
											</table>
									</div>
								</div>
							<!-- Section -->
						</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Menu -->
							<?php include_once("meny.php"); ?>

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