<?php
	require('connect_db.php');
	session_start();
	if(isset($_SESSION["email"]))
	{
		session_destroy();
	}

	$ref=@$_GET['q'];
	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$pass = $_POST['password'];
		echo "$email";
		$email = stripslashes($email);
		$email = addslashes($email);
		$pass = stripslashes($pass);
		$pass = addslashes($pass);
		$email = mysqli_real_escape_string($conn,$email);
		$pass = mysqli_real_escape_string($conn,$pass);
		$str = "SELECT * FROM user WHERE email='$email' and password='$pass'";
		$result = mysqli_query($conn,$str);
		if((mysqli_num_rows($result))!=1)
		{	$test = (mysqli_num_rows($result));
			echo "<center><h3><script>alert('Sorry.. Wrong Username (or) Password');</script></h3></center>";
			header("refresh:0;url=login.html");
		}
		else
		{
			$_SESSION['logged']=$email;
			$row=mysqli_fetch_array($result);
			$_SESSION['name']=$row[0];
			$_SESSION['profile']=$row[5];
			$_SESSION['email']=$row[1];
			$_SESSION['password']=$row[2];
			header('location: index.php?q=1');
		}
	}
?>
