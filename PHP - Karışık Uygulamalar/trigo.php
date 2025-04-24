<!DOCTYPE html> 
<html lang="tr">  
<head> 
<meta charset="UTF-8"> 
<title>Trigonometri</title> 
<style> 
body { 
font-family: Arial, sans-serif; 
background-color: blue; 
display: flex; 
justify-content: center; 
align-items: center; 
height: 100vh; 
margin: 0; 
} 
.container { 
background-color: white; 
padding: 20px; 
border-radius: 5px; 
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
text-align: center; 
margin: 10px; 
} 
h2 { 
color: blue; 
margin-bottom: 20px; 
} 
p { 
color: blue; 
margin: 10px 0; 
} 
input[type="number"], input[type="submit"] { 
width: calc(100% - 20px); 
padding: 8px; 
margin-top: 10px; 
margin-bottom: 20px; 
border: 1px solid #ccc; 
border-radius: 3px; 
box-sizing: border-box; 
} 
input[type="submit"] { 
background-color: blue; 
color: white; 
border: none; 
cursor: pointer; 
} 
input[type="submit"]:hover { 
background-color: #004499; 
} 
</style> 
</head> 
<body> 
<div class="container"> 
<h2>Girilen tamsayının (derece cinsinden açının) trigonometrik hesabı</h2> 
<form method="post" action=""> 
<label for="angle">Bir tamsayı giriniz:</label> 
<input type="number" id="angle" name="angle" required> 
<input type="submit" value="Hesapla"> 
</form> 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["angle"])) { 
$aci_derece = $_POST["angle"]; 
$aci_radyan = deg2rad($aci_derece); 
$sinus = sin($aci_radyan); 
$kosinus = cos($aci_radyan); 
$tanjant = tan($aci_radyan); 
$kotanjant = 1 / $tanjant; 
$sekant = 1 / $kosinus; 
$kosekant = 1 / $sinus; 
echo "<p>Girdiğiniz tamsayı (açı): $aci_derece derece</p>"; 
echo "<p>Sinüs: $sinus</p>"; 
echo "<p>Kosinüs: $kosinus</p>"; 
echo "<p>Tanjant: $tanjant</p>"; 
echo "<p>Kotanjant: $kotanjant</p>"; 
echo "<p>Sekant: $sekant</p>"; 
echo "<p>Kosekant: $kosekant</p>"; 
} 
?> 
</div> 
</body> 
</html>