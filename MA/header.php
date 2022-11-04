			<?php include("config.php")?>
			<header id="header">
									<ul class="icons">
											<?php
            $result = mysqli_query($conn, "SELECT * FROM bfpf_info WHERE Pos='start_social'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

        ?>		
		<?php echo $Code; ?>
		
		<?php } ?>
									</ul>
								</header>
															
								
                            	<?php
            $result = mysqli_query($conn, "SELECT * FROM bfpf_info WHERE Pos='header'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

        ?>								
			<section id="banner">
			<div class="content">
				<header>
            		 <h1><?php echo $Subject; ?></h1> 
				</header> 
			</div>
				
	 		</section>
		<?php } ?>