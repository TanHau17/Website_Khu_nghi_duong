<?php
include 'db.php';
session_start();
	if(isset($_GET['b_id'])){
	$b_id=$_GET['b_id'];
	$u_name=$_GET['uname'];
	$u_id=$_GET['uid'];
	$status_time = date("Y-m-d H:i:s");
	$updt_sql= "UPDATE `book` SET `status`='cancel' ,`status_time`='$status_time' WHERE id='$b_id'";
		if(mysqli_query($con,$updt_sql))
		{
			header("Location:booking.php?uname=$u_name&uid=$u_id&cancel=success");
		}
		else
		{
			header("Location:booking.php?uname=$u_name&uid=$u_id&cancel=unsuccess");
		}
	}
?>