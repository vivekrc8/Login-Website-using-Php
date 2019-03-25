<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vvj";
$a=$_SESSION['uname'];
$b=$_SESSION['upass'];
$c=$_SESSION['useq'];
$d=$_SESSION['uans'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "INSERT INTO login (username,password,seq,ans)
VALUES ('$a','$b','$c','$d')";

if ($conn->query($sql) === TRUE)
 {
    print '<script>alert("You Have Been Successfully Signed Up");</script>';
    print '<script>window.location.assign("login.php");</script>';

  
}
 else
 {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 