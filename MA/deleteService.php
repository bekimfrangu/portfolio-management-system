<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$ID = $_GET['ID'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM bfpf_mngservices WHERE ID=$ID");

//redirecting to the display page (index.php in our case)
header("Location:manageServices.php");
?>