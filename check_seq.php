<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vvj";
$a=$_POST["txt1"];
$b=$_SESSION["name1"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
{
      	
	if($b==$row["username"])
	{
		if($row["ans"]==$a)
		{
			print '<script>window.location.assign("reset.html");</script>';						}		
		else
		{
			print '<script>alert("Security answer is wrong!!");</script>';
		print '<script>window.location.assign("seq1.php");</script>';				
		}


	}
	
    }
} 
$conn->close();
?>