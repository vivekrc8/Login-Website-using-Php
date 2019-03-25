<?php
$d=fopen("vishal.txt","r") ;
$f=fopen("vishal1.txt","r") ;
while (!feof($d))
  {
  echo fgetc($d);
  }

while (!feof($f))
  {
  echo fgetc($f);
  }
fclose($f);
?> 
