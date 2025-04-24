<!DOCTYPE html> 
<html> 
<head> 
<title>Sıcaklık Ölçüm Uygulaması</title> 
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
width: 70%; 
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
.form-group { 
margin: 15px 0; 
display: flex; 
justify-content: center; 
align-items: center; 
} 
label { 
margin-right: 10px; 
font-weight: bold; 
} 
input[type="number"] { 
padding: 10px; 
border-radius: 5px; 
border: 1px solid #0000ff; 
width: 150px; 
} 
input[type="submit"] { 
padding: 10px 20px; 
margin-top: 20px; 
border-radius: 5px; 
border: 1px solid #0000ff; 
background-color: #0000ff; 
color: white; 
cursor: pointer; 
display: block; 
max-width: 300px; 
margin-left: auto; 
margin-right: auto; 
} 
input[type="submit"]:hover { 
background-color: #0000cc; 
} 
.error-message { 
margin-top: 20px; 
color: black; 
} 
</style> 
</head> 
<body> 
<div class="container"> 
<h2>Sıcaklık Ölçüm Uygulaması</h2> 
<form method="post" action=""> 
<div class="form-group"> 
<label for="fahrenheit">Fahrenheit:</label> 
<input type="number" id="fahrenheit" name="fahrenheit"> 
</div> 
<div class="form-group"> 
<label for="celsius">Celsius:</label> 
<input type="number" id="celsius" name="celsius"> 
</div> 
<div class="form-group"> 
<label for="kelvin">Kelvin:</label> 
<input type="number" id="kelvin" name="kelvin"> 
</div> 
<input type="submit" value="Çevir"> 
</form> 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
if (isset($_POST["fahrenheit"]) && $_POST["fahrenheit"] !== '') { 
$fahrenheit = floatval($_POST["fahrenheit"]); 
$celsius = ($fahrenheit - 32) * 5 / 9; 
$kelvin = $celsius + 273.15; 
} elseif (isset($_POST["celsius"]) && $_POST["celsius"] !== '') { 
$celsius = floatval($_POST["celsius"]); 
$fahrenheit = ($celsius * 9 / 5) + 32; 
$kelvin = $celsius + 273.15; 
} elseif (isset($_POST["kelvin"]) && $_POST["kelvin"] !== '') { 
$kelvin = floatval($_POST["kelvin"]); 
$celsius = $kelvin - 273.15; 
$fahrenheit = ($celsius * 9 / 5) + 32; 
} else { 
echo '<p class="error-message">Lütfen bir sıcaklık değeri giriniz.</p>'; 
exit; 
} 
echo "<table>"; 
echo "<thead><tr><th>Fahrenheit</th><th>Celsius</th><th>Kelvin</th></tr></thead>"; 
echo "<tbody>"; 
echo "<tr><td>" . round($fahrenheit, 2) . "</td><td>" . round($celsius, 2) . "</td><td>" . round($kelvin, 
2) . "</td></tr>"; 
echo "</tbody>"; 
echo "</table>"; 
} 
?> 
</div> 
</body> 
</html>