<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vvj";
$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=0;

$_SESSION["name2"]=$a;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
{
      	
	if($a==$row['username'])
	{
		$c=1;
		$d=$row['username'];
		break;
	}
	
    }
} 
else 
{
    echo "0 results";
}

if($c==1)
{
$sql1 = "SELECT password FROM login";
$result1 = $conn->query($sql1);

    while($row = $result1->fetch_assoc()) 

    {

	if($b==$row['password'])
	{
		$c=2;
		
	}   
    }
 
}

if($c==2)
{
		print '<script>window.location.assign("signin.php");</script>';	
}	
else
	{
print '<script>alert("Either username or password is wrong");</script>';
		print '<script>window.location.assign("login.php");</script>';	
}
	


	


$conn->close();
?> 