<?php 
$servername = "localhost"; 
$username = "root";                              
$password = "seherannem"; 
$dbname = "is_basvuru"; 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
if (!$conn) { 
die("Veritabanına bağlanamadınız.: " . mysqli_connect_error()); 
} 
echo "Veritabanına bağlandınız."; echo "<br>"; 
echo "<hr size='8' color='blue' width='320' align='left'>";  
?> 