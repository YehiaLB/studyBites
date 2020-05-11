<?php
require 'connect_db.php';
session_start();
$email =  $_SESSION['email'];

$sql = "UPDATE user SET `active`='TRUE' WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
  echo "User activated";
} else {
  echo "Error unsuspending user: " . $conn->error;
}
?>
