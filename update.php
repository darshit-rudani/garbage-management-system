<?php

	$con = mysqli_connect('localhost','root','','garbage_provider');
	error_reporting(0);
	$f_no = $_GET['de'];
	$query = "UPDATE `request` SET `status`='Complete' WHERE f_no = '$f_no'";
	$data = mysqli_query($con,$query);

	if($data)
	{
		echo "<script>alert('Are you sure want to Complete')</script>";
		?>
		<META HTTP-EQUIV="Refresh" CONTENT ="0;
		URL=http://localhost/hackathon/collector.php">
		<?php
	}
	else
	{
		echo "<font color='red'>Failed From Database";
	}
?>

