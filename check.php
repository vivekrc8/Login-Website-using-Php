<?php
session_start();
	$a=$_POST['txt2'];
	$b=$_POST['txt3'];
	$c=$_POST['txt1'];
	$d=$_POST['seq'];
	$e=$_POST['txt4'];
$_SESSION["uname"]=$c;

$_SESSION["upass"]=$b;
	
$_SESSION["useq"]=$d;

$_SESSION["uans"]=$e;
	if($a==$b)
	{
		 header("Location:signup.php");		
	}
	else
	{
		/* $m="Password not matched";
		 echo "<script type='text/javascript'>alert('$m');</script>";
		*/
		print '<script>alert("Password not matched");</script>';
		print '<script>window.location.assign("signupform.php");</script>';	
}

?>
