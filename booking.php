<?php
if (isset($_GET['uname']) && isset($_GET['uid'])) {
	?>
	<!DOCTYPE html>
	<html>

	<head>
		<title>MY BOOKINGS</title>
		<link rel="stylesheet" href="resort.css">


		<link rel="stylesheet" href="bootstrap.min.css">

	</head>

	<body>
		<div class="hero-wrap" style="background-image:url('farm details photos/bg3.jpg');height:100%;
		width: 100%;
		background-size: 100% 100%
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

								<font face="Rockwell" size="50px">
									<p class="mb-3 bread tc" style="color:#f1f1f1; margin-top:60%; "><b>MY BOOKINGS</b></p>
								</font>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid-my-4">
					<div class="container">
						<div class="row">
							<?php
							if (isset($_GET['cancel'])) {
								if ($_GET['cancel'] == "success") {
									echo '<div class="alert alert-success col-md-12">Cancelition is Successful For Verify My Canceltion</div>';
								}
								if ($_GET['cancel'] == "unsuccess") {
									echo '<div class="alert alert-danger col-md-12">Cancelition is not Successful. TRY AGAIN!! OR Contact US </div>';
								}
							}
							include 'db.php';
							$u_id = $_GET['uid'];
							$u_name = $_GET['uname'];
							$place_id = '';
							$s_select = "SELECT * from book WHERE userid='$u_id' AND status='booked'";
							$run = mysqli_query($con, $s_select);

							if (mysqli_num_rows($run) > 0) {
								while ($temp = mysqli_fetch_assoc($run)) {

									echo '<div class="col-md-12" style="width: 100%; border:solid; border-width: 3px;border-color:black; margin-top:20px; margin-left:20px;margin-bottom:20px">';

									echo '<div class="col-md-8"><br>';
									echo ' 
			<table class="table table-striped">
		
			<tr>
			<th>Checkin Date :</th>
			<td>' . $temp['checkin'] . '</td>
			</tr>
			<tr>
			<th>Checkout Date :</th>
			<td>' . $temp['checkout'] . '</td>
			</tr>
			<th>Total Price You Pay :</th>
			<td>' . $temp['total_price'] . '/- <b>Rs</b></td>
			</tr>
			<th>Book Phone Number :</th>
			<td>' . $temp['book_mob'] . '</td>
			</tr>
			<th>Book Email :</th>
			<td>' . $temp['book_email'] . '</td>
			</tr>

			<th>Payment Date and Time :</th>
			<td>' . $temp['pay_date'] . '</td>
			</tr>
			
			</table>
			';

									echo '</div>';
									$p_id = $temp['place_id'];
									$b_id = $temp['id'];
									$s_select2 = "SELECT * from place WHERE id='$p_id'";

									$run2 = mysqli_query($con, $s_select2);
									echo '<div class="col-md-4">';
									while ($rows = mysqli_fetch_assoc($run2)) {

										echo '<div class="row">';

										echo '<div class="col-md-1"></div>
					
					<img class="class-img-top thumbnail" src="' . $rows['img'] . '" style="margin-top: 20px; height:35vh;width:32rem" >
						<div class="card-body">
						  <h3 class="card-title panel panel-default" style="margin-top: -10px;" align="center"><b>' . $rows['name'] . '</b></h3>
						  <p>' . $rows['price'] . ' VNĐ/per day</p><br>
						  <a href="bookingform.php?p_name=' . $rows['name'] . '&p_id=' . $rows['id'] . '" class="btn pull-left" style="background-color: DodgerBlue; color:white;">Book Again</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						  <a href="cancel.php?uid=' . $u_id . '&uname=' . $u_name . '&b_id=' . $b_id . '" class="btn" style="background-color:red; color:white;">Huỷ</a>
						  <a href="Farm Detail/' . $rows['name'] . '.html" target="blank" class="btn pull-right" style="background-color: DodgerBlue; color:white;">Chi tiết</a>
						
					   </div>';

										echo '</div>';
									}
									echo '</div>';
									echo '</div>';


								}
							} else
								echo '<div class="panel panel-lg " style="margin:70px 310px;"><h1>Hiện tại bạn chưa có chỗ đặt</h1></div>';
							echo '<div class="panel panel-lg " style="margin:0px 310px;"><h1>Hãy đến ....</h1></div>';

							?>
						</div>
					</div>

	</body>

	</html>
	<?php
}
?>