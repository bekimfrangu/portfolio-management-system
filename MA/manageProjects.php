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
								<h3>Add Project</h3>
								<div class="row gtr-200">
									<div class="col-10 col-12-medium">
										 <form method="post" action="addProject.php" enctype="multipart/form-data">
											<div class="row gtr-uniform">
												<div class="col-4 col-12-xsmall">
													<input type="text" name="Descr" id="Descr" value="" placeholder="Name" />
												</div>
												<div class="col-4 col-12-xsmall">
													<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
													<input name="userfile" type="file" />
											
												</div>
												<!-- Break -->
												<br>
												<div class="col-4">
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
											<h3>Search Project to edit or delete</h3>
										</tr>
										<tr>

										<td>
											Write:
										</td>
										<td>
											<input type="text" name="term" placeholder="Name"/>
										</td>
											<td> <input type="submit" value="Search" class="primary"/></td>
										</tr>
										</table>
										</form>
									</div>
									
									<div class="col-12">
										<table>

											<tr>
												<td>Name</td>
												<td>Image</td>
												<td>ImgName</td>
												
												<td>Edit</td>
												<td>Delete</td>
											</tr> 

										<?php
											if (!empty($_REQUEST['term'])) {

											$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     

											$sql = mysqli_query($conn,	
												"SELECT ID,
												Descr,
												image,
												name FROM 
												bfpf_mnguser
												WHERE
												Descr LIKE '%".$term."%'"
												); 

											while($row = mysqli_fetch_array($sql)) { 		
													echo "<tr>";
													echo "<td>".$row['Descr']."</td>";
													echo "<td><img src=data:image/jpeg;base64,".base64_encode($row['image'])." width='80'  height='100'/></td>";
													echo "<td>".$row['name']."</td>";
													
													echo "<td><a href=\"editProject.php?ID=$row[ID]\" class='button' class='primary'>
																			Edit</a></td>";
													echo "<td><a href=\"deleteProject.php?ID=$row[ID]\" onClick=\"return confirm('Are you sure you want to delete the project?')\" class='button'
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