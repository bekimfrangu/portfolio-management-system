<footer id="footer">


	<?php
    	$result = mysqli_query($conn, "SELECT * FROM bfpf_info WHERE Pos='footerAdm'");
            while ($row = mysqli_fetch_assoc($result)) {

            	extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
			<p class="copyright"><?php echo $Code; ?></p>
			
			
			<?php } ?>
			
		</footer>