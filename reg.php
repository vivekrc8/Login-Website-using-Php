<html>
<title>Registration Form</title>
<head>
<center>Registration Form</center></head>

<body bgcolor="orange">
<br>
<br>

<form name="frm" action="con6.php" method="post" >
<table border="1">
<tr>
<td>
Name
</td>
<td>
<input type="text" name="txt1" >
</td>
</tr>

<tr>
<td>
Gender
</td>
<td>
<input type="radio" name="gen" value="male" >Male
<input type="radio" name="gen" value="female" >Female
</td>
</tr>

<tr>
<td>
Enrol No.
</td>
<td>
<input type="text" name="txt2" >
</td>
</tr>


<tr>
<td>
Department
</td>
<td>
<select name="dept">
<option selected>Not Selected</option>
<option>EC</option>
<option>IC</option>
<option>IT</option>
<option>CE</option>
</td>
</tr>

<tr>
<td>
Interest in Games
</td>
<td>
<input type="checkbox" name="ig1" value="COC" >COC
<input type="checkbox" name="ig2" value="Pokemon GO" >Playing Pokemon go
<input type="checkbox" name="ig3" value="Not interested" >Not Interested
</td>
</tr>
</table>
<input type="submit" value="Submit">
</form>

</body>
</html>