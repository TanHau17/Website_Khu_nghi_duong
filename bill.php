<?php
include 'db.php';
include 'book_process.php';
$selectquery = "SELECT * FROM place WHERE id = '$book_id'";
$result = mysqli_query($con, $selectquery);
$book_checkin = $_SESSION['checkin'];
$book_checkout = $_SESSION['checkout'];

$b_checkin_day = date('j', $book_checkin);
$b_checkin_month = date('n', $book_checkin);
$b_checkin_year = date('Y', $book_checkin);
$b_checkout_day = date('j', $book_checkout);
$b_checkout_month = date('n', $book_checkout);
$b_checkout_year = date('Y', $book_checkout);
if ($b_checkin_month == $b_checkout_month && $b_checkin_day == $b_checkout_day) {
	header("Location:bookingform.php?p_name=$book_place&p_id=$book_id&err=samedate");
}
if ($book_checkin > $book_checkout) {
	header("Location:bookingform.php?p_name=$book_place&p_id=$book_id&err=dateerr");
}

$book_days = '';
if ($b_checkin_month == $b_checkout_month) {
	$book_days = ($b_checkout_day) - ($b_checkin_day);
}
if ($b_checkin_month < $b_checkout_month) {
	if ($b_checkin_month == 1)
		$book_days = ('31' - $b_checkin_day) + $b_checkout_day;
	if ($b_checkin_month == 2)
		$book_days = ('28' - $b_checkin_day) + $b_checkout_day;
	if ($b_checkin_month == 3)
		$book_days = ('31' - $b_checkin_day) + $b_checkout_day;
	if ($b_checkin_month == 4)
		$book_days = ('30' - $b_checkin_day) + $b_checkout_day;
	if ($b_checkin_month == 5)
		$book_days = ('31' - $b_checkin_day) + $b_checkout_day;
	if ($b_checkin_month == 6)
		$book_days = ('30' - $b_checkin_day) + $b_checkout_day;
	if ($b_checkin_month == 7)
		$book_days = ('31' - $b_checkin_day) + $b_checkout_day;
	if ($b_checkin_month == 8)
		$book_days = ('31' - $b_checkin_day) + $b_checkout_day;
	if ($b_checkin_month == 9)
		$book_days = ('30' - $b_checkin_day) + $b_checkout_day;
	if ($b_checkin_month == 10)
		$book_days = ('31' - $b_checkin_day) + $b_checkout_day;
	if ($b_checkin_month == 11)
		$book_days = ('30' - $b_checkin_day) + $b_checkout_day;
	if ($b_checkin_month == 12)
		$book_days = ('31' - $b_checkin_day) + $b_checkout_day;
}
if ($book_days > 8) {
	header("Location:bookingform.php?p_name=$book_place&p_id=$book_id&err=bigday");
}

$_SESSION['book_days'] = $book_days;
$_SESSION['book_night'] = $book_days;
while ($rows = mysqli_fetch_assoc($result)) {
	$price = $rows['price'];
}
$total_price = ($book_days * $price);
$_SESSION['total_pay'] = $total_price;

?>

<!DOCTYPE html>
<html>

<head>
	<title>Bill <?php echo $book_place ?></title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style>
		td:hover {
			background-color: orange;
			color: black;
		}

		.price {
			font-family: Roboto, sans-serif;
			font-size: 25px;
		}

		.price span {
			white-space: nowrap;
		}

		.price span:not(:last-child):after {
			content: '\00a0';
		}

		.price span.decimal {
			font-size: smaller;
		}
	</style>

</head>

<body
	style="background-image:linear-gradient(rgba(0 , 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('farm details photos/singup bg.jpeg')">
	<div class="container-fluid">
		<div class="col-lg-8 col-lg-offset-2">
			<br>
			<div class="panel panel-warning">
				<div class="panel-header">

					<font face="cambria" size="30px">
						<p align="center" style="margin-top:10px;">BILL</p>
					</font>
				</div>
				<hr>
				<div class="panel-body">
					<font face="Rockwell">
						<h3 class="well" align="center" style="margin-top:-10px;"><b><?php echo $book_place; ?></b></h3>
					</font>
					<h4 align="center"><u>Giá cho địa điểm đặt chỗ của bạn</u></h4>
					<hr>
					<div class=""
						style="background-color:#f1f1f1;border:solid; border-color:black; width:100%; height:500px;border-size:3px;">
						<div class="col-md-5 col-md-offset-2 form-group">
							<h3><b>Origanal Price:</b></h3>
						</div>
						<div class="col-md-5 form-group">
							<h3>
								<p class="price"><?php echo $price; ?> VNĐ/Ngày</p>
							</h3>
						</div>
						<!-- <div class="col-md-5 col-md-offset-2 form-group">
							<h3><b>Discount Price:</b></h3>
						</div>
						<div class="col-md-5 form-group">
							<h3>₹<?php echo $dis_price; ?>/Per Day</h3>
						</div>
						<div class="col-md-5 col-md-offset-2 form-group">
							<h3><b>Saving Price:</b></h3>
						</div>
						<div class="col-md-5 form-group">
							<h3>₹<?php echo $save_price; ?>/Per Day</h3>
						</div> -->
						<div class="col-md-5 col-md-offset-2 form-group">
							<h3><b>Total Days:</b>
								<?php echo $book_days; ?></h3>
						</div>
						<div class="col-md-5 form-group">
							<h3><b>Total Night:</b>
								<?php echo $book_days; ?></h3>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-8 col-md-offset-2"
							style="border:double; ;border-color:black;border-size:2px;">
						</div>
						<div class="clearfix"></div>
						<div class="col-md-5 col-md-offset-2 form-group">
							<h3><b>Tổng tiền:</b></h3>
						</div>
						<div class="col-md-5 form-group">
							<h3><?php echo $total_price; ?> VNĐ</h3>
						</div>
						<div class="col-md-8 col-md-offset-2">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>#</th>
										<th>Date</th>
										<th>Time</th>
									</tr>

								</thead>
								<tbody>
									<tr>
										<td><b>Checkin</b></td>
										<td><?php echo $_GET['checkin']; ?></td>
										<td><u>AFTER</u> <b>09:00:00 PM</b></td>
									</tr>
									<tr>
										<td><b>Checkout</b></td>
										<td><?php echo $_GET['checkout']; ?></td>
										<td><u>BEFORE</u> <b>09:00:00 AM</b></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>


				</div>
				<div class="panel-footer">
					<form action="vnpay_pay.php">
						<div class="container">
							<div class="form-group">
								<input type="checkbox" required> <b>Payment By Credit Card/Debit Card</b>
							</div>
							<div class="form-group">
								<input type="checkbox" disabled> <b>Payment By Cash On Weekend Date (Comming Soon)</b>
							</div>
							<div class="form-group">
								<input type="checkbox" required><a href="tc.php"> <b>Terms & conditionS </b></a>[By
								Clicking That You Are Agree With Our <b>T&C </b>
							</div>
							<input type="submit" class="btn btn-warning" value="Continue For Payment">
						</div>
					</form>

				</div>

			</div>
		</div>
	</div>




</body>

</html>