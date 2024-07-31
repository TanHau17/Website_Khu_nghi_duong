<?php 
session_start();
include 'db.php';

if(isset($_GET['token']))
{
	$token=$_GET['token'];
	$updatesql= "UPDATE user set status='active' WHERE  token='$token' ";
	if(mysqli_query($con,$updatesql))
	{
		if(isset($_SESSION['msg'])){
		$_SESSION['msg']="Account Activated Successfully";
		header("Location:login.php");
		}
		else
		{
			$_SESSION['msg']="";
			header("Location:login.php");
		}
	}
	else
	{
		$_SESSION['msg']="Account not Updated Please try again";
		header("Location:login.php");
	}
}
?>