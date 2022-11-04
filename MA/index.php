<?php
/* Index.php faqja qe permban formen e loginit) */
	include('login.php'); // Include Login Script
	if ((isset($_SESSION['Username']) != '')) 
	{
		header('Location: admPage.php');
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
									<!-- Content -->
									

								

									<!-- Elements -->
									<section>
										<div class="row gtr-200">
											<div class="col-6 col-12-medium">

												<!-- Text stuff -->
													
												<!-- Lists -->
													
												
													
													

												<!-- Blockquote -->
													<h3>Guide</h3>
													<blockquote>For login into the uebapliccation contact the admin creator for creating the account</blockquote>

												<!-- Table -->
													

											</div>
											<div class="col-6 col-12-medium">

												<!-- Buttons -->
							

												<!-- Form -->
													<h3>Log in</h3>

													<form method="post" action="#">
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
																<input type="text" name="Username" id="Username" value="" placeholder="Username" />
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="password" name="Pass" id="Pass" value="" placeholder="Password" />
															</div>
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit" name="submit" value="Login" class="primary" /></li>
																</ul>
															</div>
														</div>
													</form>

												<!-- Image -->
												
											
												<!-- Box -->
												
												<!-- Preformatted Code -->
												
											</div>
										</div>

								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
							
							<!-- Menu -->
					

							<!-- Section -->
					
							<!-- Section -->
										

							<!-- Menu -->

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