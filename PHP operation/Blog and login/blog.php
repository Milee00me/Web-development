<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title>My Blog Page</title>
</head>
<style>
	*{
		text-align: center;
		margin-top: 5%;
		box-sizing: border-box;	
	}
	#brd{
		border: 2px solid black;
		border-radius: 25px 25px 25px 25px;
		margin : 8%;
		margin-left:20%;
		margin-right:20%;
		border-size: 
	}
	
	input[type="submit"]{
			width: 40%;
			height:	40px;
			background-color: #18C1A8;
			color: #ffffff; 
			border-radius: 4px;
		}
</style>
<body>
	<?php 
		if($_POST)
		{
			if($_POST['logout']=="yes")
			{
				session_destroy();
			}
		}
		if(isset($_SESSION['user']))
		{
			echo "<div id=brd>"
				."<h1>Welcome $_SESSION[user]!<h1>"
				."<b>&emsp;&nbsp;College :</b> $_SESSION[college]<br>"
				."<b>Class :</b> $_SESSION[class]<br>"
				."<b>Batch :&nbsp;</b> $_SESSION[batch]<br>";

			echo "<br>"
				."<form method='post' action='blog.php'>"
					."<input type='hidden' name='logout' value='yes' />"
					."<input type='submit' value='Logout' />"
				."</form>"
				."<div>";
		}
		else
		{
			header("Refresh:0,url=login.php");
		}
	 ?>
</body>
</html>
