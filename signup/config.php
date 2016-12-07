<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$conn=mysqli_connect('***************com', '*****', '************1') or die("DB connect error!");
mysqli_select_db($conn, '*****nyc') or die("DB select error!");

//echo "Connection success!";
?>