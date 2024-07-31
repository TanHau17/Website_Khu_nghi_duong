<?php
include 'db.php';
session_start();
	$book_place = $_SESSION['place_name'];
	$u_name = $_SESSION['uname'];
	$u_email = $_SESSION['uemail'];
	$u_mobno = $_SESSION['umobno'];
	$u_id = $_SESSION['userid'];
	$book_id =$_SESSION['place_id'];
if(isset($_POST['book']))
{
	$address = $_POST['address'];
	$checkin =	$_POST['checkin'];
	$checkout = $_POST['checkout'];
	$book_phone = $_POST['book_mob'];
	$book_email = $_POST['book_email'];
	$book_place = $_SESSION['place_name'];
	$u_name = $_SESSION['uname'];
	$u_email = $_SESSION['uemail'];
	$u_mobno = $_SESSION['umobno'];
	$u_id = $_SESSION['userid'];
	$book_id =$_SESSION['place_id'];
	$_SESSION['address']=$address;
	$_SESSION['book_mob']=$book_phone;
	$_SESSION['book_email']=$book_email; 
	$_SESSION['checkin']=strtotime($checkin);
	$_SESSION['checkout']=strtotime($checkout);
	$temp_in=strtotime($checkin);
	$temp_out=strtotime($checkout);
	
	$selectquery = " SELECT * from place WHERE (id='$book_id') AND id NOT IN (SELECT place_id FROM book WHERE  ((checkin <='$checkin' AND checkout>='$checkout') OR (checkin<'$checkin' AND checkout>='$checkout') OR (checkin>='$checkin' AND checkout<='$checkout') OR (checkin<'$checkin' AND checkin='$checkout')) AND (status='booked'))";;
	$resultrun = mysqli_query($con,$selectquery);
	while($temp=mysqli_fetch_assoc($resultrun))
	{
		$temper=$temp['id'];
		echo $temper;
		
		
	}
		if(isset($temper))
{
	header("Location:bill.php?checkin=$checkin&checkout=$checkout");
	
}
else
{
	header("Location:bookingform.php?p_name=$book_place&p_id=$book_id&err=booked");
}
	
}


/*else
{
		echo "Problem";
}*/

?>