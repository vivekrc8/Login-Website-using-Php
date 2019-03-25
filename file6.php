<html>
<head>
</head>
<script language="JavaScript">
var a=prompt("enter name : Vishal or Vivek or Jatin");
</script>
</head>
<body>

<?php

$b= array
  (
  "Vishal"=>array
  (
  "Shweta",
  "Shreya",
  "Krutika"
  ),
  "Vivek"=>array
  (
  "Binimol",
"Binimol",
"Binimol"
  ),
  "Jatin"=>array
  (
  "Yet to achieve",
"Yet to achieve",
"Yet to achieve"
  )
  );

echo "The GF's of ".$a." is"; 
for($c=0;$c<=2;$c++)
{
	if($b[$c]==$a)
	{
		echo $b[$a];	
	}
}
?>
</body>
</html>