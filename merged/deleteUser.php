<?php
require 'connect_db.php.php';
session_start();
$email =  $_SESSION['email'];
$sql = "DELETE FROM user WHERE id='$email'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
?>
