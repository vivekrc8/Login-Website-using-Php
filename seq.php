<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vvj";

$a=$_POST["txt1"];
$c=0;

$_SESSION["name1"]=$a;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM login";

$result=$conn->query($sql);

  
  
if ($result->num_rows > 0) 
{

while($row = $result->fetch_assoc()) 
{
    // output data of each row


	 
    	
	if($a==$row["username"])	 
	{
			$d=$row["seq"];
			$_SESSION["seq1"]=$d;
			print '<script>window.location.assign("seq1.php");</script>';	
                                                         
	
		break;
	}
	else 
{
 print '<script>alert("Username is wrong");</script>';
		print '<script>window.location.assign("forgetpass.php");</script>';	

    }
}

 
}

	
$conn->close();
?>