<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vvj";
$a=$_SESSION["name1"];
$b=$_SESSION["lopass"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql1="UPDATE login SET password='$b' WHERE username='$a'";

if($conn->query($sql1)==TRUE)
{
	 print '<script>alert("Password has been resetted!!");</script>';
	print '<script>window.location.assign("login.php");</script>';	
}

 
$conn->close();
?>