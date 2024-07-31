
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
position: absolute;" background="farm details photos/banner.jpg">
    
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
            <form id="login" class="input-group" method="post" action="login-check.php">
                <input type="text" class="input-field" placeholder="User Id, Email, Mobile number" name="logininput"
                required>
                <input type="password" class="input-field" placeholder="Enter Password" name="password"
                required><br><br>
				<p style="font-size:15px; color:red">Invalid Username or Password!</p>
				<p style="font-size:14px; color:red ;padding-top:7px;">Not a Member <b>Register</b></p>
				<input type="checkbox" class="chech-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn" name="login">Log in</button>
				
            </form>
            <form id="register" class="input-group" method="post" action="signup.php"	>
				<input type="text" class="input-field" placeholder="Name" name="name"
                required>
                <input type="email" class="input-field" placeholder="Email Id" name="email"
                required>
                <input type="number" class="input-field" placeholder="Enter Mobile Number" maxlength="10" name="mobno"
                required>
                <input type="password" class="input-field" placeholder="Enter Password" name="password" l
                required>
				
                <input type="checkbox" class="chech-box" required><span>I agree to the <a href="TC.html">terms & condition</a></span>
                <button type="submit" class="submit-btn" name="register">Register</button>
            </form>
        </div>
        <script>
            var x=document.getElementById("login");
            var y=document.getElementById("register");
            var z=document.getElementById("btn");
            function register() {
                x.style.left="400px";
                y.style.left="50px";
                z.style.left="110px";
            }
            function login() {
                x.style.left="50px";
                y.style.left="450px";
                z.style.left="0px";
            }
        </script>
</body>
</html>