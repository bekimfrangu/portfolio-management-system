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
							<section>
								
									<p style="text-align: right;">Welcome, <em><?php echo $login_user;?>!</em></p> 
									
									<header class="major">
										<h2>Manage dashboard data</h2>
									</header>


									<div class="features">
										<article>
										<span class="icon fa-gem"></span>
											<div class="content">
												<a href="manageServices.php"><h3>Manage Services</h3></a>
												<p>The form for services data management</p>
											</div>
                                        </article>
                                        <article>
										<span class="icon solid fa-paper-plane"></span>
											<div class="content">
                                            <a href="manageProjects.php"><h3>Manage Projects</h3></a>
												<p>The form for projects data management</p>
											</div>
                                        </article>
                                        <article>
										<span class="icon solid fa-rocket"></span>
											<div class="content">
                                            <a href="manageSkills.php"><h3>Manage Skills</h3></a>
												<p>The form for skills data management</p>
											</div>
										</article>
										<article>
										<span class="icon solid fa-signal"></span>
											<div class="content">
                                            <a href="manageData.php"><h3>Manage Data</h3></a>
												<p>The form for data management</p>
											</div>
                                        </article>
									</div>
							</section>

							<!-- Section -->
					

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Menu -->
							<?php include_once("meny.php"); ?>

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