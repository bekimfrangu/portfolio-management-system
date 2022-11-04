<?php
/* Kontrollon sesionin */
include('config.php');
session_start();
$user_check=$_SESSION['Username'];
$ses_sql = mysqli_query($conn,"SELECT Username FROM bfpf_user WHERE Username='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_user=$row['Username'];
if(!isset($user_check))
{
header("Location: index.php");
} ?>