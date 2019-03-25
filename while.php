<?php

$c=40;
$a=0;
$sp=0;
$b=0;
while($a<=10)
{
	while($sp<=$c)
	{
	echo"&nbsp";
	$sp++;
	}

	while($b<=$a)
	{
	echo"*";
	$b++;
	}
	echo"</br>";
$a++;
$c--;
$sp=0;
$b=0;

}



$c++;
$c++;
$a=9;
$sp=$c;
$b=0;
while($a>=0)
{
	while($sp>=0)
	{
	echo"&nbsp";
	$sp--;
	}

	while($b<=$a)
	{
	echo"*";
	$b++;
	}
	echo"</br>";
$a--;
$c++;
$sp=$c;
$b=0;

}
?>