<?php
$con = mysqlI_connect("localhost","root","","vvj");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else
{
echo"sql connected";
}


mysqli_query("student",$con); 

mysqli_query("INSERT INTO student (stname, stdept, stnumber)
VALUES ('Peter', 'ec', '35')");

mysqli_query("INSERT INTO student (stname, stdept, stnumber)
VALUES ('mack', 'ce', '35')");

mysqlI_close($con);



?> 
