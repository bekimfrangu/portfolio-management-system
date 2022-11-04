<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollim.php");	
?>

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Uebaplikacioni per Menaxhimin e Shitjeve te Romaneve (UMShR)</title>
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
						

							<!-- Banner -->
							<?php include_once("fillimifaqes.php"); ?>
								

								
							
						

							<!-- Section -->
							<section>
								
									<p style="text-align: right;">Pershendetje, <em><?php echo $login_user;?>!</em></p> 
									
									<header class="major">
										<h2>Menaxhimi i te dhenave te ballines</h2>
									</header>


									<div class="features">
										<article>
										<a href="menaxho_zhanret.php"><span class="icon fa-gem"></span></a>
											<div class="content">
												<a href="menaxho_zhanret.php"><h3>Menaxho Zhanret</h3></a>
												<p>Forma per menaxhimin e zhanreve ne uebaplikacion</p>
											</div>
                                        </article>
                                        <article>
										<a href="menaxho_romane.php"><span class="icon fa-gem"></span></a>
											<div class="content">
                                            <a href="menaxho_romane.php"><h3>Menaxho Romane</h3></a>
												<p>Forma per menaxhimin e romaneve ne uebaplikacion</p>
											</div>
                                        </article>
                                        <article>
										<a href="modifiko_tedhenat_forma.php"><span class="icon fa-gem"></span></a>
											<div class="content">
                                            <a href="modifiko_tedhenat_forma.php"><h3>Modifiko te dhenat</h3></a>
												<p>Forma per modifikimin e te dhenave ne uebaplikacionin</p>
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

							<!-- Search -->
								

							<!-- Menu -->
							<?php include_once("meny.php"); ?>

							<!-- Section -->
								

							<!-- Section -->
							<?php include_once("fundi_faqes.php"); ?>

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