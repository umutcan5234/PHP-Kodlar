<!DOCTYPE html> 
<html lang="tr"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Not Hesaplama</title> 
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
input[type="number"], input[type="submit"] { 
padding: 10px; 
margin: 10px 0; 
border: 1px solid #00796b; 
border-radius: 5px; 
} 
input[type="submit"] { 
background-color: #00796b; 
color: white; 
cursor: pointer; 
} 
.result { 
margin-top: 20px; 
padding: 10px; 
border: 1px solid #00796b; 
background-color: #b2dfdb; 
border-radius: 5px; 
color: #004d40; 
} 
</style> 
</head> 
<body> 
<div class="container"> 
<h2>5 üzerinden sınav sonucuna göre not hesaplama</h2> 
<form method="post" action=""> 
<label for="score">Sınav sonucunuzu giriniz:</label> 
<input type="number" id="score" name="score" min="0" max="100" required> 
<input type="submit" value="Tıkla"> 
</form> 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$score = intval($_POST["score"]); 
$grade = ""; 
if ($score >= 0 && $score < 50) { 
$grade = "1"; 
} elseif ($score >= 50 && $score < 60) { 
$grade = "2"; 
} elseif ($score >= 60 && $score < 70) { 
$grade = "3"; 
} elseif ($score >= 70 && $score < 85) { 
$grade = "4"; 
} elseif ($score >= 85 && $score <= 100) { 
$grade = "5"; 
} 
echo "<div class='result'>Sınav sonucunuz: $score - - - 5 üzerinden karşılığı: $grade</div>"; 
} 
?> 
</div> 
</body>  
</html>