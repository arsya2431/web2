<?php 
$h= 12;
$i= 2; 
$j = 15; 
echo "<table>";
echo "Tabel Perkalian <br>";
echo "======================";
while ( $j <= 45 ) { 
 echo "<tr><td>"; 
 echo $h;
 echo "</td>";
 echo "<td>";
 echo "*";
 echo "</td>";
 echo "<td>"; 
 echo $j;
 echo "</td>";
 echo "<td>";
 echo "=";
 echo "</td>";
 echo "<td>"; 
 echo $h * $j; 
 echo "</td></tr>"; 
 $j = $j + 2; 
} 
echo "</table>"; 
?> 