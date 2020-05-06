<?php
session_start();
if (isset($_SESSION['name'])) {
    header("location:login.php");
}
//mais fix the design in this its an empty page with a button of forget password 
?>
<html>

<head>
    <title>Forget Password</title>
    
</head>

<body>
    <!-- THE LOADER -->

    <header>
        <div class="container-fluid custom-container">
            <div class="row no_row row-header">
                <div class="brand-be">
                    <a href="index.php">
                       
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- MAIN CONTENT -->
    <div id="content-block">
        <div class="head-bg">
            <div class="head-bg-img"></div>
            <form action='forget.php' method="POST">
                <div class="head-bg-content">
                    <input class="input-signtype" name="email" type="email" required="" placeholder="Your email" style="width: 20%;line-height: 45px;border-radius: 2px;border: none;color: #b4b7c1;padding-left: 0px;margin-bottom: 20px;">
                    <br><br>
                    <div class="col-xs-7 for-signin">
                        <input name='forget' type="submit" class="be-popup-sign-button" value="Forget Password">
                    </div>
                </div>
            </form>
        </div>
        <?php
        ///check if the email exists in the db
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
                        $headers = "From: janhamsho@gmail.com\r\n";
                        $headers .= "MTME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        mail($to, $subject, $message, $headers);
                        echo ('<script>alert("An email with the new password was sent")</script>');
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
        
          
       
</body>

</html>