<!DOCTYPE html> 
<html> 
<head> 
<title>Çarpım Tablosu</title> 
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
padding: 20px; 
background-color: #e6f7ff; 
border-radius: 10px; 
27 
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
} 
table { 
margin: 0 auto; 
border-collapse: collapse; 
} 
th, td { 
border: 1px solid #0000ff; 
padding: 10px; 
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
<h2>Çarpım Tablosu</h2> 
<table> 
<thead> 
<tr> 
<th></th> 
<?php 
for ($i = 1; $i <= 10; $i++) { 
echo "<th>$i</th>"; 
} 
?> 
</tr> 
</thead> 
<tbody> 
<?php 
for ($i = 1; $i <= 10; $i++) { 
echo "<tr>"; 
echo "<th>$i</th>"; 
for ($j = 1; $j <= 10; $j++) { 
echo "<td>" . ($i * $j) . "</td>"; 
} 
echo "</tr>"; 
} 
?> 
</tbody> 
</table> 
</div>  
</body> 
</html>