<?php
//including the database connection file
include("config.php");

//getting ID of the data from url
$ID = $_GET['ID'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM bfpf_contact WHERE ID=$ID");

//redirecting to the display page (index.php in our case)
header("Location: contacts.php");
?>

