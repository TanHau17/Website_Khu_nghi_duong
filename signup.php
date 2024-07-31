<?php
include 'db.php';
session_start();
if(isset($_POST['register'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
		$mobno = $_POST['mobno'];


        $queryregister = "INSERT INTO `user`( `name`, `email`, `password`,`mobno`) VALUES ('$name','$email','$password','$mobno')";
		
        $result = @mysqli_query($con,$queryregister);
        if($result){
			$_SESSION['uname'] = $name;
		$_SESSION['uemail']=$emai;
		$_SESSION['umobno']=$mobno;
		
           header('Location:homepage.php');
        }
        else{
            header('Location:login3.php');
        }
    }
	
?>
