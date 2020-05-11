<?php
include("connect_db.php");
session_start();
if (isset($_SESSION['email'])) {
    header("location:forgot_password.html");
}
	if (isset($_POST['forget'])) {
            $db = new PDO("mysql:dbname=courses", "root", "");
            $query = $db->query("SELECT * FROM user");
            $COUNT = 0;
            foreach ($query as $row) {
                if ($row['email'] == $_POST['email']) {
                    $COUNT = 1;
                    $rand = ['!', '@', '#', '$', '%', '^', '&', '*'];
                    $let = ['a', 'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm'];
                    $pas = $let[rand(0, 23)] . $let[rand(0, 23)] . $let[rand(0, 23)] . time() . $rand[rand(0, 7)];
                    $pass = $db->quote(md5($db->quote($pas))); // to be added to db
                    $e = $db->quote($_POST['email']);
                    $query = $db->exec("UPDATE user SET Password= ($pass) where  Email =($e)");
                    if ($query) {
                        $to = $_POST["email"];
                        $subject = "Password Reset";
                        $message = "Your new password is: <b>$pas</b>";
                        $headers = "From: studybits2020@yahoo.com\r\n";
                        $headers .= "MTME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        mail($to, $subject, $message, $headers);
                        echo ('<script>alert("An email with the new password was sent")</script>');
						header('location: sign_in.html?q=1');
						
						
                    } else {
                        echo ('<script>alert("Something went wrong please try again")</script>');
                    }
                }
            }
            if ($COUNT == 0) {
                echo ("<script>alert('This email does not exist');</script>");
            }
			
        }
        ?>
