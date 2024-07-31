<?php
include 'db.php';
include 'book_process.php';

	$book_place = $_SESSION['place_name'];
	$u_name = $_SESSION['uname'];
	$u_email = $_SESSION['uemail'];
	$u_mobno = $_SESSION['umobno'];
	$u_id = $_SESSION['userid'];
	$book_id =$_SESSION['place_id'];
	$address=$_SESSION['address'];
	$book_phone=$_SESSION['book_mob'];
	$book_email=$_SESSION['book_email']; 
	$book_days=$_SESSION['book_days'];
	$book_night=$_SESSION['book_night'];
	$total_price=$_SESSION['total_pay'];
	

	if(isset($_POST['submit_pay']))
	{
		$card_num = $_POST['card_num'];
		$card_exp = $_POST['card_exp'];
		$card_cvv = $_POST['card_cvv'];
		$card_h_name = $_POST['card_h_name'];
		$pay_time = date("Y-m-d H:i:s");
		$status_time =date("Y-m-d H:i:s");
		$p_name = $_SESSION['place_name'];
		$insquery = "INSERT INTO `book` (`userid`,`uname`,`uemail`,`umobno`,`place_id`,`place_name`,`status`,`status_time`,`address`,`total_price`,`checkin`,`checkout`,5617`book_email`,`book_mob`,`card_num`,`card_exp`,`card_cvv`,`card_h_name`,`pay_date`) VALUES ('$u_id','$u_name','$u_email','$u_mobno','$book_id','$book_place','$cat','booked','$status_time','$address','$book_days','$book_night','$total_price','$checkin','$checkout','$no_room','$no_adult','$no_child','$book_email','$book_phone','$card_num','$card_exp','$card_cvv','$card_h_name','$pay_time') ";
		if(mysqli_query($con,$insquery))
		{
			header('Location:thankyou.php');
		}
		else
			echo '<h1 color="red">SERVER ERROR!</h1>';
	}
	
?>