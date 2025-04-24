<!DOCTYPE html> 
<html> 
<head> 
<title>Hesaplama Sayfası</title> 
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
width: 80%; 
} 
th, td { 
border: 1px solid #0000ff; 
padding: 15px; 
text-align: center; 
} 
th { 
background-color: #0000ff; 
color: white; 
} 
td { 
background-color: #ffffff; 
} 
input[type="number"], input[type="submit"] { 
padding: 10px; 
margin: 10px; 
border: 1px solid #ccc; 
border-radius: 5px; 
width: 80%; 
} 
input[type="submit"] { 
background-color: #0000ff; 
color: white; 
cursor: pointer; 
} 
input[type="submit"]:hover { 
background-color: #004499; 
} 
</style> 
</head> 
<body> 
<div class="container"> 
<h2>Girilen tamsayıya göre sayının karesini, küpünü, karekökünü ve küpkökünü hesaplama</h2> 
<form method="post" action=""> 
<label for="number">Bir tamsayı giriniz:</label> 
<input type="number" id="number" name="number" step="any" required> 
<input type="submit" value="Hesapla"> 
</form> 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$number = floatval($_POST["number"]); 
$square = $number ** 2; 
$cube = $number ** 3; 
$squareRoot = sqrt($number);  
$cubeRoot = $number ** (1/3); 
echo "<table>"; 
echo "<thead><tr><th>Girdiğiniz 
Sayı</th><th>Karesi</th><th>Küpü</th><th>Karekökü</th><th>Küpkökü</th></tr></thead>"; 
echo "<tbody>"; 
echo 
"<tr><td>{$number}</td><td>{$square}</td><td>{$cube}</td><td>{$squareRoot}</td><td>{$cubeRoot}</td></tr>"; 
echo "</tbody>"; 
echo "</table>"; 
} 
?> 
</div> 
</body> 
</html>