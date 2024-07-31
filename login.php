<?php
include 'db.php';
session_start();

if (isset($_POST['register'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobno = $_POST['mobno'];
	$token = bin2hex(random_bytes(15));


	$queryregister = "INSERT INTO `user`( `name`, `email`, `password`,`mobno`,`token`,`status`) VALUES ('$name','$email','$password','$mobno','$token','active')";

	$result = @mysqli_query($con, $queryregister);
	if ($result) {
		$_SESSION['uname'] = $name;
		$_SESSION['uemail'] = $email;
		$_SESSION['umobno'] = $mobno;
		// // $subject = "Email Activation";
		// // $body="Hello $name, Thank You For being With Us. kindly Verify it&abos;s You by clicking On This link http://localhost/test_book%20my%20farm/activate.php?token=$token";
		// // $headers ="FROM: smitmaniya5@gmail.com";

		// if(mail($email,$subject,$body,$headers)){
		// $_SESSION['msg']="Check Your Mail to Activate Your Account $email";

		// }
		// else
		// {
		// $_SESSION['msg']="We can't send mail to  Your Account $email please try different Domain";

		// }	

		header("location:login.php");



	} else {
		$_SESSION['msg'] = "User Exist!";
	}
}
if (isset($_POST['login'])) {
	$logininput = $_POST['logininput'];
	$password = $_POST['password'];

	$querylogin = "SELECT * FROM user WHERE (email = '$logininput' OR userid = '$logininput' OR mobno = '$logininput') AND status='active'";
	$resultlogin = @mysqli_query($con, $querylogin);
	while ($row = @mysqli_fetch_assoc($resultlogin)) {
		$emailRetrive = $row['email'];
		$useridRetrive = $row['userid'];
		$passwordRetrive = $row['password'];
		$mobnoRetrive = $row['mobno'];
		$nameRetrive = $row['name'];

	}

	$_SESSION['uname'] = $nameRetrive;
	$_SESSION['uemail'] = $emailRetrive;
	$_SESSION['umobno'] = $mobnoRetrive;
	$_SESSION['userid'] = $useridRetrive;

	if ($useridRetrive == $logininput or $emailRetrive == $logininput or $mobnoRetrive == $logininput) {


		if ($passwordRetrive == $password) {
			if (isset($_POST['rememberme'])) {
				setcookie("logininput", $logininput, time() + 86400);
				setcookie("password", $password, time() + 86400);
				$timestamp = date("Y-m-d H:i:s");
				$userip = $_SERVER['REMOTE_ADDR'];
				$log_sql = "INSERT INTO `accesslog`(`userid` , `logintime`, `ipaddress`) VALUES ('$useridRetrive','$timestamp','$userip')";
				global $con;
				mysqli_query($con, $log_sql);
				header('Location:homepage.php');
			} else {
				setcookie("logininput", '', time() - 86400);
				setcookie("password", '', time() - 86400);
				$timestamp = date("Y-m-d H:i:s");
				$userip = $_SERVER['REMOTE_ADDR'];
				$log_sql = "INSERT INTO `accesslog`(`userid` , `logintime`, `ipaddress`) VALUES ('$useridRetrive','$timestamp','$userip')";
				global $con;
				mysqli_query($con, $log_sql);
				header('Location:homepage.php');
			}

		} else {
			$_SESSION['msg'] = "Invalid Username And Password!";

		}
	} else if ($useridRetrive == NULL and $emailRetrive == NULL and $mobnoRetrive == NULL) {
		$_SESSION['msg'] = "Activate Your Account First";

	} else {
		$_SESSION['msg'] = "SERVER ERROR";
	}

	@mysqli_free_result($resultlogin);

	// header("location:bookingform.php");


}
?>
<html>

<head>

	<title>LOGIN | BOOK MY FARM</title>
	<link rel="stylesheet" href="login_.css">

</head>

<body style="
height:100%;
width: 100%;
background-size: cover;
background-position: center;
background-attachment: fixed;
position: absolute;" background="farm details photos/bg2.jpg">

	<div class="form-box">
		<div class="button-box">
			<div id="btn"></div>
			<button type="button" class="toggle-btn" onclick="login()">Log In</button>
			<button type="button" class="toggle-btn" onclick="register()">Register</button>
		</div>
		<div class="social-icons">
			<img src="farm details photos/fb.png">
			<img src="farm details photos/tw.png">
			<img src="farm details photos/gp.png">
		</div>
		<form id="login" class="input-group" method="post" action="login.php">
			<input type="text" class="input-field" placeholder="User Id, Email, Mobile number" name="logininput" value="<?php if (isset($_COOKIE['logininput'])) {
				echo $_COOKIE['logininput'];
			} ?>" required>
			<input type="password" class="input-field" placeholder="Enter Password" name="password" value="<?php if (isset($_COOKIE['password'])) {
				echo $_COOKIE['password'];
			} ?>" required>
			<p class="alert alert-danger" style="font-size:15px; color:red">
				<!-- <?php echo $_SESSION['msg'];
				$_SESSION['msg'] = ''; ?> -->
			</p>

			<input type="checkbox" class="chech-box" name="rememberme" selected><span>Remember Password</span>
			<button type="submit" class="submit-btn" name="login">Log in</button>

		</form>
		<form id="register" class="input-group" method="post" action="login.php">
			<input type="text" class="input-field" placeholder="Name" name="name" required>
			<input type="email" class="input-field" placeholder="Email Id" name="email" required>
			<input type="number" class="input-field" placeholder="Enter Mobile Number" maxlength="10" name="mobno"
				required>
			<input type="password" class="input-field" placeholder="Enter Password" name="password" l required>

			<input type="checkbox" class="chech-box" required><span>I agree to the <a href="TC.html">terms &
					condition</a></span>
			<button type="submit" class="submit-btn" name="register">Register</button>
		</form>
	</div>
	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");
		function register() {
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}
		function login() {
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0px";
		}
	</script>
</body>

</html>