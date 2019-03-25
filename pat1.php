<?php

$c=40;

for($a=0;$a<=10;$a++)
{
for($sp=0;$sp<=$c;$sp++)
{
	echo"&nbsp";
}
	
for($b=0;$b<=$a;$b++)
{
	echo"*";
}	
echo"</br>";
$c--;
}

$c++;
$c++;

for($a=9;$a>=0;$a--)
{
for($sp=$c;$sp>=0;$sp--)
{
	echo"&nbsp";
}
	
for($b=0;$b<=$a;$b++)
{
	echo"*";
}	
echo"</br>";
$c++;
}

?>