<html>
<center>
<head>
Security Question
<br>
<br>
<br>
</head>
<?php
session_start();

echo "Your security question is :<br><br>".$_SESSION["seq1"] ;

?>
<body>

<form name="frm2" method="post" action="check_seq.php">
<br>
<input type="text" name="txt1">
<br>
<input type="submit" value="Submit">

</body>
</html>