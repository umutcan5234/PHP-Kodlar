<?php 
session_start(); 
if (!isset($_SESSION["randomNumber"])) { 
    $_SESSION["randomNumber"] = rand(1, 100); 
    $_SESSION["attempts"] = 0; 
} 
$message = "Hoşgeldiniz, oyuna başlamak için lütfen bir sayı giriniz."; 
if (isset($_POST['guess'])) { 
    $guess = $_POST['number']; 
    $_SESSION["attempts"]++; 
    if ($guess > $_SESSION["randomNumber"]) { 
        $message = "<font color='red'>Daha küçük bir sayı giriniz.</font>"; 
    } elseif ($guess < $_SESSION["randomNumber"]) { 
        $message = "<font color='green'>Daha büyük bir sayı giriniz.</font>"; 
    } else { 
        $message = "Tebrikler, sayıyı buldunuz! <font color='green'>Sayı: " . 
$_SESSION["randomNumber"] . "</font> <br> Deneme sayısı: " . $_SESSION["attempts"]; 
        session_destroy(); 
    } 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>Sayı Tahmin Oyunu</title> 
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
border: 2px solid #0000ff; 
border-radius: 10px; 
padding: 20px; 
background-color: #f0f8ff; 
} 
table { 
margin: 0 auto; 
} 
th { 
background-color: #0000ff; 
color: white; 
padding: 10px; 
font-size: 18px; 
} 
td { 
padding: 10px; 
font-size: 16px; 
} 
input[type="number"] { 
padding: 5px; 
font-size: 16px; 
} 
input[type="submit"] { 
padding: 5px 15px; 
font-size: 16px; 
color: white; 
background-color: #0000ff; 
border: none; 
border-radius: 5px; 
cursor: pointer; 
} 
input[type="submit"]:hover { 
background-color: #000099; 
} 
.message { 
margin-top: 20px; 
font-size: 18px; 
} 
</style> 
</head> 
<body> 
<div class="container"> 
<form method="post" action=""> 
<table> 
<thead> 
<tr> 
<th colspan="2">1-100 arasında bir sayı giriniz</th> 
</tr> 
</thead> 
<tbody> 
<tr> 
<td>Sayı Giriniz:</td> 
<td><input type="number" name="number" min="1" max="100" required></td> 
</tr> 
<tr> 
<td colspan="2"><input type="submit" name="guess" value="Tahmin Et"></td> 
</tr> 
</tbody> 
</table> 
</form> 
<div class="message"> 
<?php echo $message; ?> 
</div> 
</div> 
</body> 
</html> 