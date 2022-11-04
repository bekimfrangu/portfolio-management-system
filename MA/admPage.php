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
		<script src="jquery.js"></script>

		
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
						

							<!-- Banner -->
							<?php include_once("header.php"); ?>
								

							
							<!-- Section -->

							<!-- Section -->
								<section>
							<p style="text-align: right;">Welcome, <em><?php echo $login_user;?>!</em></p> 
									
									<div class="row gtr-200">
										<div class="col-6 col-12-medium">
									
										
												<!-- Blockquote --> 
												<h3>Admin Module</h3>
												
												<blockquote>This module is used for data management of the user module as well as data management of the administrator module as well</blockquote>
											
                                   
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