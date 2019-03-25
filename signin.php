<html>
<head>
</head>
<body >
<form name="frm3" method="post" action="login.php">
<p align="right">
<input type="submit" value="Logout">
</p>
</form>
</body>
<?php
session_start();
$a=$_SESSION["name2"];

echo "<br>Welcome"." ".$a."<br>"."You have signed in successfully";
?>
</html>