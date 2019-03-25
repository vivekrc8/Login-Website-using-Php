<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vvj";
$a=$_POST['txt1'];
$b=$_POST['gen'];
$c=$_POST['txt2'];
$d=$_POST['dept'];
$e=$_POST['ig1'];
$f=$_POST['ig2'];
$g=$_POST['ig3'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
echo"connected";
}

if($e=="COC")
{
$h="COC";
if($f=="Pokemon GO")
{
$h="COC & POKEMON GO";
}
}

else 
{
if($f=="Pokemon GO")
{
$h="POKEMON GO";
}
}

 if($g=="Not interested")
{
$h="Not interested";
}


$sql = "INSERT INTO reg (name,Gender,enrol_no,dept,games)
VALUES ('$a','$b','$c','$d','$h')";

if ($conn->query($sql) === TRUE)
 {
    echo "<br>New record created successfully";
}
 else
 {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 