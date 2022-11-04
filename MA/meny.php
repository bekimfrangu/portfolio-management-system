
<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<?php
  $result = mysqli_query($conn, "SELECT * FROM bfpf_info WHERE Pos='menyAdm'");
  while ($row = mysqli_fetch_assoc($result)) {

   extract($row);
	 echo $Code;
			  
if($result==null)
  mysqli_free_result($result);

			}
?>
								</nav>