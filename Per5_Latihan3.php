<?php 
$file = fopen("Per5_Latihan1.txt","r"); 
while(! feof($file)) 
 { 
 echo fgets($file). "<br />"; 
 } 
fclose($file); 
?> 