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
								<h3>Add Service</h3>
								<div class="row gtr-200">
									<div class="col-10 col-12-medium">
										 <form method="post" action="addService.php">
											<div class="row gtr-uniform">
												<div class="col-8 col-12-xsmall">
													<input type="text" name="Service" id="Service" value="" placeholder="Service" />
												<br>
													<textarea rows="6" cols="5" name="ServiceDesc" id="ServiceDesc" value="" placeholder="Service Description" /></textarea>
												<br>
													<input type="text" name="ServiceClass" id="ServiceClass" value="" placeholder="Service Class" />
												</div>
												<!-- Break -->
												<br>
												<div class="col-12">
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
											<h3>Search Service to edit or delete</h3>
										</tr>
										<tr>

										<td>
											Write:
										</td>
										<td>
											<input type="text" name="term" placeholder="Service or Class"/>
										</td>
											<td> <input type="submit" value="Search" class="primary"/></td>
										</tr>
										</table>
										</form>
									</div>
									
									<div class="col-12">
										<table>

											<tr>
												<td>Service</td>
												<td>Description</td>
												<td>Class</td>
												
												<td>Edit</td>
												<td>Delete</td>
											</tr> 

										<?php
											if (!empty($_REQUEST['term'])) {

											$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     

											$sql = mysqli_query($conn,	
												"SELECT ID,
												Service,
												ServiceDesc,
												ServiceClass FROM 
												bfpf_mngservices
												WHERE
												Service LIKE '%".$term."%' OR ServiceClass LIKE '%".$term."%'"
												); 

											while($row = mysqli_fetch_array($sql)) { 		
													echo "<tr>";
													echo "<td>".$row['Service']."</td>";
													echo "<td>".$row['ServiceDesc']."</td>";
													echo "<td>".$row['ServiceClass']."</td>";
													
													echo "<td><a href=\"editService.php?ID=$row[ID]\" class='button' class='primary'>
																			Edit</a></td>";
													echo "<td><a href=\"deleteService.php?ID=$row[ID]\" onClick=\"return confirm('Are you sure you want to delete the service?')\" class='button'
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