<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vvj";


$conn = new PDO($servername, $username, $password, $dbname);

$conn->setAttribute(PDO: :ATTR_ERRMODE, PDO: :ERRMODE_EXCEPTION);



$rows=$conn->query("SELECT * FROM login");

while($row = mysql_fetch_array($result))
  {
	echo $row['username'];
echo "<br>";
}	

$conn->close();
?> 