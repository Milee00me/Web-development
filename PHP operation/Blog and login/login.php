<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		#login-box{
			width: 25%;
			margin: 0 auto;
			margin-top: 200px;
			border: 1px solid black;
			border-radius: 5px;
			padding: 20px;
			height: 120pt;
		}
		#login-box>input{
			display: block;
			width: 90%;
			margin: 0 auto;
			height: 20pt;
			margin-bottom: 10px;
			border-radius: 4px 4px 4px 4px;
		}
		#login-box>input[type="submit"]{
			width: 40%;
			height:	40px;
			background-color: #18C1A8;
			color: #ffffff; 
			border-radius: 4px;
		}
		span{
			display: block;
			text-align: center;
			margin-bottom: 10px;
		}
		.error{
			position: fixed;
			display: block;
			text-align: center;
			margin-top: 13%;
			margin-left: 42%;
		}
		.suc{
			position: fixed;
			display: block;
			text-align: center;
			margin-top: 13%;
			margin-left: 37%;
		}
	</style>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script>
		$(document).ready(function() { 
			setTimeout(function() { 
				$('#div1').fadeOut(); 
		 }, 2000); 
		});
		$(document).ready(function() { 
			setTimeout(function() { 
				$('#div1').fadeOut(); 
		 }, 2000); 
		});

	</script>
</head>

<body>
	<?php
		if ($_POST)
		{
			$username=$_POST['username'];
			$pass=$_POST['pass'];
			if($username=="Shadab" && $pass=="SSSSSS")
			{
				echo '<div class="suc" id=div1>Login Successful!You Will be redirected to blog page</div>';
				$_SESSION['user']=$username;
				$_SESSION['college']="AIKTC";
				$_SESSION['class']="TE";
				$_SESSION['batch']="B4";
				header("Refresh:3,url=blog.php");
			}
			else
			{
				echo '<div class="error" id=div1> Incorrect username or password!</div>';
				
			}
		}
	?>
	<form method="post" action="login.php">
		<div id="login-box">
			<span>Log In</span>
			<input type="text" name="username" id="username" placeholder="Username" required="required" />
			<input type="password" name="pass" id="pass" placeholder="Passsword" required="required" />
			<input type="submit" id="submit" value="Log In" />
		</div>
	</form>
</body>
</html>
