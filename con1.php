<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else
{
echo "connected to Mysql server";
}

// some code
?> 
