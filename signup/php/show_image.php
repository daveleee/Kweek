<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . '/config.php');

	$sql="select image from kweek.event where age_group='40andabove'";
	$result=mysqli_query($conn, $sql);

	$row=mysqli_fetch_assoc($result);
	
	
	echo $row['image'];


	mysqli_close($conn);
?>