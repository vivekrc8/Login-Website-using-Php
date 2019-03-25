<?php


$e=$_POST['txt1'];
$k=$_POST['txt2'];
$g=str_split($e);
$b=strlen($e);
echo "Entered string is :";

$d=0;
$i=0;

for($c=0;$c<$b;$c++)
{
	if($g[$c]==$k)
	{	
		$i=$c;
		$i++;
		$h[$d]=$i;
		$d++;		
	}	
	echo $e[$c];
}
echo "<br>"."Length of string is :".$b;
echo "<br>"."Total no. of letter {".$k."} in the string is : ".$d;


if($d!=0)
{
echo "<br>"."The Position of letter {".$k."} is : ";

for($c=0;$c<$d;$c++)
{
echo $h[$c]." ";
}
}
?>