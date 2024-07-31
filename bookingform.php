<?php
session_start();
if (isset($_SESSION['uname'])) {
	if (isset($_GET['p_name'])) {
		?>
		<!DOCTYPE html>
		<html lang="en">

		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>BOOKING FORM</title>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
			<link type="text/css" rel="stylesheet" href="booking.css">
			<link type="text/css" rel="stylesheet" href="bootstrap.min.css">
			<link rel="stylesheet" href="glyphicon.css">

			<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->


			<link type="text/css" rel="stylesheet" href="bootstrap.min.css">



		</head>

		<body style="background-color: black;">

			<nav class="navbar navbar-inverse" id="navgi">
				<div class="container-fluid">
					<div class="navbar-header">

						<a class="navbar-brand" href="#"><span style="color: white;"><b>COHA</b></span><span
								style="color:orange"><b>RESORT</b></span></a>
					</div>





					<?php
					$_SESSION['place_name'] = $_GET['p_name'];
					$_SESSION['place_id'] = $_GET['p_id'];

					echo '<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
						<a class="dropdown-toggle"  data-toggle="dropdown"><i class="fa fa-user fa-lg" aria-hidden="true"></i> <b>' . ucfirst($_SESSION['uname']) . '</b>
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="booking.php?uname=' . $_SESSION['uname'] . '&uid=' . $_SESSION['userid'] . '">Đã đặt</a></li>
						<li><a href="canceltion.php?uname=' . $_SESSION['uname'] . '&uid=' . $_SESSION['userid'] . '">Đã huỷ</a></li>
						<li class="divider"></li>
						<li><a href="about_me.php?uname=' . $_SESSION['uname'] . '&uid=' . $_SESSION['userid'] . '">Trang cá nhân</a></li>
						</ul>
							</li>
						<li><a href="logout.php" ><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Logout</a></li> 
     
    
   					 </ul>';
					?>

				</div>

			</nav>


			<div id="booking" class="section">
				<div class="section-center">
					<div class="container">
						<div class="row">
							<!-- <?php if ($_GET['err'] == "booked") {
								echo '<div class="alert alert-danger" style="><h3 align="center" style="margin-top:-10px;">Your Place is already Booked On Your Date Try Different Dates Or Different Place</h3></div>';
							}
							if ($_GET['err'] == "samedate") {
								echo '<div class="alert alert-danger" style="><h3 align="center" style="margin-top:-10px;">Checkin Date is not equal to Checkout Date.You have Booked atleast 24 Hours.For more You Have read our Terms And Conditions </h3></div>';
							}
							if ($_GET['err'] == "dateerr") {
								echo '<div class="alert alert-danger" style="><h3 align="center" style="margin-top:-10px;">Checkin date is not Greater than checkout date</h3></div>';
							}
							if ($_GET['err'] == "bigday") {
								echo '<div class="alert alert-danger" style="><h3 align="center" style="margin-top:-10px;">You can not book This place for greater than 8 Days, If you want than First Contact Us and request Us via E-mail With pProper Reason</h3></div>';
							} ?> -->

							<div class="booking-form" style="max-width:70%;">
								<div class="form-header">
									<h1>Hãy đặt chỗ cho <?php echo $_SESSION['place_name']; ?></h1>
								</div>
								<form action="book_process.php" method="post">
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Vui lòng cung cấp địa chỉ"
											name="address" required>
										<span class="form-label">Destination</span>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input class="form-control" type="date" name="checkin" required>
												<span class="form-label">Check In</span>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input class="form-control" type="date" name="checkout" required>
												<span class="form-label">Check out</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input class="form-control" type="email" name="book_email"
													placeholder="Enter your Email" required>
												<span class="form-label">Email</span>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input class="form-control" type="tel" name="book_mob"
													placeholder="Enter you Phone" required>
												<span class="form-label">Số điện thoại</span>
											</div>
										</div>
									</div>
									<div class="form-btn">
										<input type="submit" class="submit-btn" name="book">
									</div>
							</div>

							</form>
						</div>
					</div>
				</div>
			</div>
			</div>

			<script src="js/jquery.min.js"></script>
			<script>
				$('.form-control').each(function () {
					floatedLabel($(this));
				});

				$('.form-control').on('input', function () {
					floatedLabel($(this));
				});

				function floatedLabel(input) {
					var $field = input.closest('.form-group');
					if (input.val()) {
						$field.addClass('input-not-empty');
					} else {
						$field.removeClass('input-not-empty');
					}
				}
			</script>

		</body>

		</html>
		<?php
	} else {
		header('Location:homepage.php');
	}
} else {
	header("location:login.php");
}
?>