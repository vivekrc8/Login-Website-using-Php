<?php
session_start();
	$a=$_POST['pass1'];
	$b=$_POST['pass2'];


$_SESSION["lopass"]=$a;

	if($a==$b)
	{
		 print'<script>window.location.assign("reset_final.php");</script>';		
	}
	else
	{
		/* $m="Password not matched";
		 echo "<script type='text/javascript'>alert('$m');</script>";
		*/
		print '<script>alert("Password not matched");</script>';
		print '<script>window.location.assign("reset.html");</script>';	
}

?>
