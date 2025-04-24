<!DOCTYPE html> 
<html> 
<head> 
<title>Faktöriyel Hesaplama</title> 
<style> 
body { 
display: flex; 
justify-content: center; 
align-items: center; 
height: 100vh; 
font-family: Arial, sans-serif; 
background-color: blue; 
margin: 0; 
} 
.container { 
text-align: center; 
padding: 40px; 
background-color: #e6f7ff; 
border-radius: 10px; 
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
} 
table { 
margin: 20px auto; 
border-collapse: collapse; 
width: 50%; 
} 
th, td { 
border: 1px solid #0000ff; 
padding: 20px; 
text-align: center; 
} 
th { 
background-color: #0000ff; 
color: white; 
} 
td {  
background-color: #ffffff; 
} 
</style> 
</head> 
<body> 
<div class="container"> 
<h2>Faktöriyel Hesaplama</h2> 
<form method="post" action=""> 
<label for="number">Bir sayı giriniz:</label> 
<input type="number" id="number" name="number" required> 
<input type="submit" value="Hesapla"> 
</form> 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$number = intval($_POST["number"]); 
$factorial = 1; 
for ($i = 1; $i <= $number; $i++) { 
$factorial *= $i; 
} 
echo "<table>"; 
echo "<thead><tr><th>Sayı</th><th>Faktöriyel</th></tr></thead>"; 
echo "<tbody>"; 
echo "<tr><td>{$number}</td><td>{$factorial}</td></tr>"; 
echo "</tbody>"; 
echo "</table>"; 
} 
?> 
</div> 
</body> 
</html> 