<?php
	include("connect_db.php");
	session_start();

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$name = stripslashes($name);
		$name = addslashes($name);
		
		
		$email = $_POST['email'];
		$email = stripslashes($email);
		$email = addslashes($email);

		$password = $_POST['password'];
		$password = stripslashes($password);
		$password = addslashes($password);

		$str="SELECT email from user WHERE email='$email'";
		$result=mysqli_query($con,$str);

		if((mysqli_num_rows($result))>0)
		{
						$test = (mysqli_num_rows($result));
						echo "<center><h3><script>alert('Sorry.. This email is already registered !!');</script></h3></center>";
            header("refresh:0;url=sign_in.html");
        }
		else
		{
            $str="insert into user set name='$name',email='$email',password='$password'";
			if((mysqli_query($con,$str)))
			header('location: index.html?q=1');
		}
		
    }
	 if (isset($_GET['logout'])) {
        session_destroy();
        header("location:index.php");
    }
?>
