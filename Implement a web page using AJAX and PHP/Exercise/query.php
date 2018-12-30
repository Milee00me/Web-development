<?php
require_once 'functions.php';
	if($_POST){
			$fname=$_POST['name'];
			$number=$_POST['mobile'];
			$email=$_POST['email'];
			$roll=$_POST['rollno'];
			$uname=$_POST['user'];
			$pass=$_POST['pass'];
		
			$sql1="INSERT INTO users (Fname,Number,Email,Roll,Uname,pass) VALUES ('$fname','$number','$email','$roll','$uname','$pass')";
			$result=queryMysql($sql1);
			
			if($result){
				echo 'true';
			}
			else{
				echo 'false';
			}
	}
?>