<!DOCTYPE html>
<html>
<head>
	<title>My PHP Example at AIKTC</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php
		error_reporting(0);
		echo '<h1>Welcome to PHP</h1>';
		if($_POST){
			$username=$_POST['username'];
			$brand=$_POST['brand'];
			if($username&&$brand)
				echo "Thank You, $username You have voted for $brand";
			else
				echo "<center><br><br><br>you might have missed something please again cross check it<br><br><br></center>";
				header('Refresh:5, url=myexample.php');
		}
		else{
			echo <<<_END

			<form method="post" action="myexample.php">
				<br><label for="user">User Name: </label>
				<input type="text" name="username" id="username" /><br>
				<br><label>please Vote for your Favorite Mobile Brand</label><br>
				<br><label><input type="radio" name="brand" value="Nokia" />Nokia</label>
				<br><label><input type="radio" name="brand" value="Apple" />Apple</label>
				<br><label><input type="radio" name="brand" value="Samsung" />Samsung</label>
				<br><label><input type="radio" name="brand" value="HTC" />HTC</label>
				<br><label><input type="radio" name="brand" value="Asus" />Asus</label>
				<br><br><input type="submit" value="Vote" />
			</form>
_END;
		

		}

	?>
</body>
</html>
