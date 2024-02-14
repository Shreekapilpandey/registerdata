<?php
require("connection.php");

$first= mysqli_real_escape_string($conn,$_POST['first']);
$last= mysqli_real_escape_string($conn,$_POST['last']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$uid= mysqli_real_escape_string($conn,$_POST['uid']);
$pwd= mysqli_real_escape_string($conn,$_POST['pwd']);

$sql="INSERT INTO user(user_id, user_first, user_last, user_email, user_pwd)VALUES('$uid','$first','$last','$email','$pwd');";
mysqli_query($conn, $sql);

// Close the database connection
$conn->close();
header("Location: success.php");