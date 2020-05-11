<?php
require 'connect_db.php';
session_start();
$email =  $_SESSION['email'];


$sql = "UPDATE user SET `active`='0' WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
  echo "User deactivated";
} else {
  echo "Error unsuspending user: " . $conn->error;
}
?>
