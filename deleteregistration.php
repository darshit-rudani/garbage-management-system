<?php

	$con = mysqli_connect('localhost','root','','garbage_provider');
	error_reporting(0);
	$name = $_GET['re'];
	$query = "DELETE FROM `registration` WHERE user_name='$name'";
	$data = mysqli_query($con,$query);

	if($data)
	{
		echo "<script>alert('Are you sure want to delete this record')</script>";
		?>
		<META HTTP-EQUIV="Refresh" CONTENT ="0;
		URL=http://localhost/hackathon/u_data.php">
		<?php
	}
	else
	{
		echo "<font color='red'>Failed From Database";
	}
?>