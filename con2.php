<?php
$con1 = mysqli_connect("localhost","root","");
if (!$con1)
  {
  die('Could not connect: ' . mysql_error());
  }
else
{
echo "Connected<br>";
}
// Create database

$dat="CREATE DATABASE my_db";
if($con1->query($dat)==TRUE)
{
echo"database created";
}
 else
{
echo"not created";
}

?> 
