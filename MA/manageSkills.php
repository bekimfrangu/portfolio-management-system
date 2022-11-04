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
								<!-- Form -->
								<h3>Add Skill</h3>
								<div class="row gtr-200">
									<div class="col-12 col-12-medium">
										 <form method="post" action="addSkill.php">
											<div class="row gtr-uniform">
												<div class="col-3 col-12-xsmall">
													<input type="text" name="Skill" id="Skill" value="" placeholder="Skill" />
												</div>
												<div class="col-3 col-12-xsmall">
													<input type="text" name="Percent" id="Percent" value="" placeholder="Percentage" />
												</div>
												<div class="col-3 col-12-xsmall">
													<input type="text" name="Class" id="Class" value="" placeholder="Class" />
												</div>
												<!-- Break -->
												
												<div class="col-3 col-12-xsmall">
													<ul class="actions">
														<li><input type="submit" name="add" value="Add" class="primary" /></li>	
													</ul>
												</div>
											</div>
										</form>
									</div>
									
									<div class="col-8 col-12-medium">
				
										<form action="" method="post">  
										
										<table>
										<tr><br>
											<h3>Search Skill to edit or delete</h3>
										</tr>
										<tr>

										<td>
											Write:
										</td>
										<td>
											<input type="text" name="term" placeholder="Skill or Class"/>
										</td>
											<td> <input type="submit" value="Search" class="primary"/></td>
										</tr>
										</table>
										</form>
									</div>
									
									<div class="col-12">
										<table>

											<tr>
												<td>Skill</td>
												<td>Percentage</td>
												<td>Class</td>
												
												<td>Edit</td>
												<td>Delete</td>
											</tr> 

										<?php
											if (!empty($_REQUEST['term'])) {

											$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     

											$sql = mysqli_query($conn,	
												"SELECT ID,
												Skill,
												Percent,
												Class FROM 
												bfpf_mngskills
												WHERE
												Skill LIKE '%".$term."%' OR Class LIKE '%".$term."%'"
												); 

											while($row = mysqli_fetch_array($sql)) { 		
													echo "<tr>";
													echo "<td>".$row['Skill']."</td>";
													echo "<td>".$row['Percent']."</td>";
													echo "<td>".$row['Class']."</td>";
													
													echo "<td><a href=\"editSkill.php?ID=$row[ID]\" class='button' class='primary'>
																			Edit</a></td>";
													echo "<td><a href=\"deleteSkill.php?ID=$row[ID]\" onClick=\"return confirm('Are you sure you want to delete the Skill?')\" class='button'
																			class='primary'>Delete</a> </td></tr>";			
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