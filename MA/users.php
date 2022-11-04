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
								<h3>Add user's info</h3>
								<div class="row gtr-200">
									<div class="col-12 col-12-medium">
										 <form method="post" action="addUser.php">
											<div class="row gtr-uniform">
												<div class="col-3 col-12-xsmall">
													<input type="text" name="Username" id="Username" value="" placeholder="Username" />
												</div>
												<div class="col-3 col-12-xsmall">
													<input type="text" name="Pass" id="Pass" value="" placeholder="Password" />
												</div>
												<div class="col-3 col-12-xsmall">
													<input type="email" name="Email" id="Email" value="" placeholder="Email" />
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
											<h3>Search user to edit or delete</h3>
										</tr>
										<tr>

										<td>
											Write:
										</td>
										<td>
											<input type="text" name="term" placeholder="Username or Email"/>
										</td>
											<td> <input type="submit" value="Search" class="primary"/></td>
										</tr>
										</table>
										</form>
									</div>
									
									<div class="col-12">
										<table>

											<tr>
												<td>Username</td>
												<td>Password</td>
												<td>Email</td>
												
												<td>Edit</td>
												<td>Delete</td>
											</tr> 

										<?php
											if (!empty($_REQUEST['term'])) {

											$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     

											$sql = mysqli_query($conn,	
												"SELECT ID,
												Username,
												Pass, Email FROM 
												bfpf_user
												WHERE
												Username LIKE '%".$term."%' OR Email LIKE '%".$term."%'"
												); 

											while($row = mysqli_fetch_array($sql)) { 		
													echo "<tr>";
													echo "<td>".$row['Username']."</td>";
													echo "<td>".$row['Pass']."</td>";
													echo "<td>".$row['Email']."</td>";
													
													echo "<td><a href=\"editUser.php?ID=$row[ID]\" class='button' class='primary'>
																			Edit</a></td>";
													echo "<td><a href=\"deleteUser.php?ID=$row[ID]\" onClick=\"return confirm('Are you sure you want to delete the user?')\" class='button'
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
