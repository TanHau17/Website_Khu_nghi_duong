<!DOCTYPE html>
<html>
    <head>
        <title>SEARCH PLACES | BOOK MY FARM</title>
        <link rel="stylesheet" href="resort.css">
			
  
    <link rel="stylesheet" href="bootstrap.min.css">
  
    </head>
    <body>
        <div class="image">
                                          
     
          
        </div>
		<?php
		if(isset($_POST['search_farm']))
	{
	$s_cat = '';
	$s_checkin = $_POST['check_in'];
	$s_checkout = $_POST['check_out'];
	$s_cat = $_POST['cat'];
	$count=0;
if($s_checkin==$s_checkout)
{
	header("Location:homepage.php?err=samedate");
}
if($s_checkin>$s_checkout)
	{
		header("Location:homepage.php?err=dateerr");
	}	
		/*if($book_days>8)
	{
		header("Location:homepage.php?err=bigday");
	}*/
	
	?>
		 <div class="hero-wrap" style="background-image:linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('farm details photos/bgbg.jpg');height:100%;
        width: 100%;
        background-size: cover;
        background-position:center;
        background-attachment: fixed;
		background-repeat: no-repeat;
        position: relative;
		margin-top:-20px;
		padding-top:4%"><!--bg-image-->
        <section class="hero-wrap hero-wrap-2 js-fullheight" data-stellar-background-ratio="0.5">
        
	  <div class="backimage">
		<div class="overlay"></div>
		<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                   
               <font face="Rockwell" size="42px"><p class="mb-3 bread tc" style="color:#f1f1f1; margin-top:55%; "><b>SEARCH RESULT </b><br>For <?php echo $s_cat.' At '.$s_checkin.' - '.$s_checkout; ?></p></font>
                
		
	<div class="container-fluid-my-4">
		<div class="container">
		<div class="row">
		
		
				
<?php
include 'db.php';

	
	if($s_cat=='both'){
	$s_select = " SELECT * from place WHERE id NOT IN (SELECT place_id FROM book WHERE  ((checkin <='$s_checkin' AND checkout>='$s_checkout') OR (checkin<'$s_checkin' AND checkout>='$s_checkout') OR (checkin>='$s_checkin' AND checkout<='$s_checkout')) AND status='booked')";}
	else{
		$s_select = " SELECT * from place WHERE(category='$s_cat') AND id NOT IN (SELECT place_id FROM book WHERE ((checkin <='$s_checkin' AND checkout>='$s_checkout') OR (checkin<'$s_checkin' AND checkout>='$s_checkout') OR (checkin>='$s_checkin' AND checkout<='$s_checkout')) AND status='booked')";
	}
	$run = mysqli_query($con,$s_select);
	if(mysqli_num_rows($run)>0)
	{
		while($rows = @mysqli_fetch_assoc($run))
		{
			if($count%3==0)
			{
				echo'<div class="row">';
			}
		   echo'<div class="col-md-1"></div>
				<div class="card col-md-3 mx-auto " style="width: 30rem;border-width: 3px;border-color:black; margin-top:20px; margin-left:20px;margin-bottom:20px">
				<img class="class-img-top thumbnail" src="'.$rows['img'].'" style="margin-top: 20px; height:30vh;width:26rem" >
					<div class="card-body">
					  <h3 class="card-title panel panel-default" style="margin-top: -10px;" align="center"><b>'.$rows['name'].'</b></h3>
					  <p class="card-text">Show about '.$rows['name'].' And Book Now</p>
					  <strike>₹'.$rows['price'].'</strike>/per day&nbsp;&nbsp;&nbsp;&nbsp;<p class="pull-right"><b> ₹'.$rows['dis_price'].'/per day</b></p> <br>Save ₹'.$rows['save'].'<br><br>
					  <a href="bookingform.php?p_name='.$rows['name'].'&p_id='.$rows['id'].'" class="btn pull-left" style="background-color: DodgerBlue; color:white;">Book Now</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  <a href="Farm Detail/'.$rows['name'].'.html" target="blank" class="btn pull-right" style="background-color: DodgerBlue; color:white;">Details</a>
					
				   </div>';
				   
				 echo '</div>';
				 
			if($count%3==0)
			{
			echo'</div>';
			}	
			$count ++;
		}
	}
	else
		echo '<div class="panel panel-lg " style="margin:70px 310px;"><h1>Sorry! We Can not find Any Place At Your Date</h1></div>';
		
			
}

?>
		</div>
		</div>
		
    </body>
</html>