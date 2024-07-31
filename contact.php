<?php
include 'db.php';
$err = '';
if (isset($_POST['submit_feedback'])) {

	$name = $_POST['f_lname'];
	$email = $_POST['f_email'];
	$mob = $_POST['f_contact'];
	$feedback = $_POST['feedback'];
	$insquery = "INSERT INTO `feedback` (`f_lname`,`f_email`,`f_contact`,`feedback`) VALUES('$name','$email','$mob','$feedback')";
	if (mysqli_query($con, $insquery)) {
		$err = '<div class="alert alert-success">Thank you for Your Valuable Feedback.we will soon touch you</div>';
	} else {
		$err = '<div class="alert alert-danger">SERVER Error! Please contact us via Email.</div>';
	}
}

?>
<?php
session_start();
if (isset($_SESSION['uname']) && isset($_SESSION['userid'])) {
	?>


	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Liên Hệ | COHA RESORT </title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="footer.css">
		<link rel="stylesheet" href="bootstrap.min.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="TC1.css">
		<style>
			.info {
				text-align: Center;
				font-size: 20px;

			}

			.heading {
				font-size: 30px;
				color: orange;
			}

			* {
				-webkit-margin: 0;
				-webkit-padding: 0;
			}
		</style>


	</head>

	<body>

		<nav class="navbar navbar-inverse" id="navgi">
			<div class="container-fluid">
				<div class="navbar-header">

					<a class="navbar-brand" href="#"><span style="color: white;"><b>COHA</b></span><span
							style="color:orange"><b>RESORT</b></span></a>
				</div>



				<?php

				echo ' <ul class="nav navbar-nav">
      <li><a class="navlink"href="homepage.php">Trang chủ</a></li>

      <li><a href="resort.php" target="blank">Resort</a></li>
      <li><a href="post.php?cat_name=resort">Bài viết</a></li>
      <li class="active"><a href="#">Liên hệ</a></li>
      <li><a href="about.php">Giới thiệu</a></li>
    </ul>';



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
     <li><a href="logout.php" ><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Đang xuất</a></li> 
     
    
    </ul>';
				?>

			</div>
		</nav>
		<div class="hero-wrap" style="background-image:url('farm details photos/contact.jpg');height:100%;
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

								<font face="Rockwell">
									<h1 class="mb-3 bread tc" style="color:#f1f1f1; margin-top:20%; "><b>Liên Hệ</b></h1>
								</font>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<br><br><br>
		<div class="container">
			<div class="col-md-10 col-md-offset-1">
				<font face="the times new roman">
					<p class="heading">
						Bạn có thắc mắc? Hãy liên hệ với chúng tôi bất cứ khi nào bạn muốn. Chúng tôi luôn sẵn sàng miễn là
						bạn được vui</p>
				</font>
			</div><br><br><br><br><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-2">
					<div class="col-md-5 col-md-offset-4">
						<span class="glyphicon glyphicon-phone pull-center" style="font-size:50px;  padding:15px"></span>
					</div>
					<font face="Rockwell" size="32px" ;>
						<h1 align="center"><b>HOTLINE</b></h1>
					</font>
					<font face="Rockwell">
						<h1 align="center"><b>0562610822</b></h1>
					</font>
				</div>
				<div class="col-md-4">
					<div class="col-md-5 col-md-offset-4">
						<span class="glyphicon glyphicon-envelope" style="font-size:50px;  padding:15px"></span>
					</div>
					<font face="Rockwell">
						<h1 align="center"><b>EMAIL</b></h1>
					</font>
					<font face="cailibri">
						<h1 align="center"><b>coharesort@gmail.com</b></h1>
					</font>
				</div>
			</div><br><br>

			<div class="col-md-8 col-md-offset-2">
				<form action="contact.php" method="post" class="form-horizontal" method="post">
					<?php echo $err; ?>
					<div class="panel panel-warning">
						<div class="panel-heading jumbotron">
							<font face="cailibri">
								<h1 align="center">Hãy để lại thông tin của bạn</h1>
							</font>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">Tên</label>

								<div class="col-sm-10">
									<input type="text" id="f_lname" class="form-group form-control" name="f_lname"
										placeholder="Họ">
								</div>
								<!-- <div class="col-sm-5">
									<input type="text" id="name" class="form-group form-control" name="lname"
										placeholder="Tên">
								</div> -->
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">EMAIL</label>

								<div class="col-sm-10">
									<input type="text" id="email" class="form-group form-control" name="f_email"
										placeholder="Email của bạn">
								</div>

							</div>
							<div class="form-group">
								<label for="contact" class="col-sm-2 control-label">Số Điện Thoại</label>

								<div class="col-sm-10">
									<input type="text" id="f_contact" class="form-group form-control" name="f_contact"
										placeholder="Số điện thoại của bạn">
								</div>

							</div>
							<div class="form-group">
								<label for="contact" class="col-sm-2 control-label">Đánh Giá</label>

								<div class="col-sm-10">
									<textarea id="feedback" rows="5" class="form-group form-control" name="feedback"
										placeholder="Hãy để lại trải nghiệm, vấn đề hoặc thắc mắc"></textarea>
								</div>

							</div>
							<div class="form-group">


								<div class="col-sm-10 col-sm-offset-2">
									<input type="submit" class="form-group form-control btn btn-warning block"
										name="submit_feedback" value="Gửi">
								</div>

							</div>



						</div>
					</div>
				</form>
			</div>

		</div>
		<footer class="footer">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-4">
						<div class="ftco-footer-widget mb-4 ml-md-5">
							<h2 class="ftco-heading-2" style="color:white; margin-top: 8%;">Thông Tin</h2>
							<ul class="list-unstyled"><br>
								<li><a href="about_index.php" class="py-2 d-block" style="color:white;">Giới Thiệu</a></li>
								<li><a href="#serv" class="py-2 d-block" style="color:white;">Dịch Vụ</a></li>
								<li><a href="#" class="py-2 d-block" style="color:white;">Điều Khoản và Điều Kiện</a></li>
								<li><a href="#" class="py-2 d-block" style="color:white;">Đảm Bảo Giá Tốt Nhất</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2" style="color:white; margin-top:8%;">Hỗ Trợ Khách Hàng</h2>
							<ul class="list-unstyled"><br>
								<li><a href="#" class="py-2 d-block" style="color:white;">FAQ</a></li>
								<li><a href="#" class="py-2 d-block" style="color:white;">Phương Thức Thanh Toán</a></li>
								<li><a href="#" class="py-2 d-block" style="color:white;">Mẹo Đặt Phòng</a></li>
								<li><a href="#" class="py-2 d-block" style="color:white;">Liên Hệ Chúng Tôi</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ftco-footer-widget mb-4">
							<h2 id="about" class="ftco-heading-2" style="color:white; margin-top: 10%;">Bạn Có Câu Hỏi?</h2>
							<div class="block-23 mb-3">
								<ul style="color:white;"><br>
									<li><span class="text" style="color:white;">99 Lê Lợi, Gò Vấp, Tp.HCM</span></li>
									<li><span class="text" style="color:white;">0562610822</span></li>
									<li><span class="text" style="color:white;">coharesort@gmail.com</span></li>
								</ul><br>

								<div class="social-handling;" style="color: white;">
									<img src="farm details photos\instagram.png" style="width:30px; height:30px ; ">
									coharesort<br><br>
									<img src="farm details photos\face book.png" style="width:30px; height:30px ;">
									coharesort<br><br>
									<img src="farm details photos\twitter.png"
										style="width:40px; height:40px ;">coharesort<br>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
				</div>
			</div>
			</div>
		</footer>

		<script type="text/javascript" src="bootstrap.min.js"></script>
	</body>

	</html>
	<?php
} else {
	header("location:login.php");
}
?>