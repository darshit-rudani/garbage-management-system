<?php

	$con = mysqli_connect('localhost','root','','garbage_provider');
	error_reporting(0);
	$user_id = $_GET['de'];
	$query = "DELETE FROM `request` WHERE user_id='$user_id'";
	$data = mysqli_query($con,$query);

	if($data)
	{
		echo "<script>alert('Are you sure want to delete this record')</script>";
		?>
		<META HTTP-EQUIV="Refresh" CONTENT ="0;
		URL=http://localhost/hackathon/user%20request.php">
		<?php
	}
	else
	{
		echo "<font color='red'>Faield From Database";
	}
?>