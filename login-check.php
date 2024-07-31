<?php
include 'db.php';
	session_start();
	$_SESSION['msg']='';
	$_SESSION['srch-msg']='';
	if(isset($_POST['login']))
	   {
        $logininput = $_POST['logininput'];
        $password = $_POST['password'];

        $querylogin = "SELECT * FROM user WHERE email = '".$logininput."' OR userid = '".$logininput."' OR mobno = '".$logininput."'";
        $resultlogin = @mysqli_query($con,$querylogin);
		while($row = @mysqli_fetch_array($resultlogin,MYSQLI_ASSOC))
		{
			$emailRetrive = $row['email'];
			$useridRetrive = $row['userid'];
			$passwordRetrive = $row['password'];
			$mobnoRetrive = $row['mobno'];
			$nameRetrive = $row['name'];
		
		}
		
		$_SESSION['uname']=$nameRetrive;
		$_SESSION['uemail']=$emailRetrive;
		$_SESSION['umobno']=$mobnoRetrive;
		$_SESSION['userid']=$useridRetrive;
		
		if($useridRetrive==$logininput OR $emailRetrive==$logininput OR $mobnoRetrive==$logininput){
			
			
			if($passwordRetrive==$password) 
			{	
					if(isset($_POST['rememberme']))
					{
						setcookie("logininput",$logininput,time()+86400);
						setcookie("password",$password,time()+86400);
						$timestamp = date("Y-m-d H:i:s");
						$userip = $_SERVER['REMOTE_ADDR'];
						$log_sql = "INSERT INTO `accesslog`(`userid` , `logintime`, `ipaddress`) VALUES ('$useridRetrive','$timestamp','$userip')";
						global $con;
						mysqli_query($con,$log_sql);
						header('Location:homepage.php');	
					}
					else
					{
						setcookie("logininput",'',time()-86400);
						setcookie("password",'',time()-86400);
						$timestamp = date("Y-m-d H:i:s");
						$userip = $_SERVER['REMOTE_ADDR'];
						$log_sql = "INSERT INTO `accesslog`(`userid` , `logintime`, `ipaddress`) VALUES ('$useridRetrive','$timestamp','$userip')";
						global $con;
						mysqli_query($con,$log_sql);
						header('Location:homepage.php');
					}
							
			}
			else
			{
				$_SESSION['msg']="INVALID USERNAME AND PASSWORD";
				
			}
		}
		else if($useridRetrive==NULL AND $emailRetrive==NULL AND $mobnoRetrive==NULL)
			{
				header('Location:login2.php');
			}
			
		else
			{
				header('Location:login2.php');
			}
			
		@mysqli_free_result($resultlogin);
	   }
?>