<!DOCTYPE html> 
<html lang="tr"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Mini Test</title> 
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
input[type="radio"], input[type="submit"] { 
padding: 10px; 
margin: 10px; 
border: 1px solid #ccc; 
border-radius: 5px; 
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
<h2>Mini Test</h2> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
<p>1. Soru: Echo kodu hangi yazılım dilinde kullanılır?</p> 
<input type="radio" id="phpdili" name="question1" value="Php"> 
<label for="phpdili">Php</label><br> 
<input type="radio" id="pythondili" name="question1" value="Python"> 
<label for="pythondili">Python</label><br><br> 
<p>2. Soru: Php ile veritabanı işlemleri yapılabilir mi?</p> 
<input type="radio" id="yes" name="question2" value="Evet"> 
<label for="yes">Evet</label><br> 
<input type="radio" id="no" name="question2" value="Hayır"> 
<label for="no">Hayır</label><br><br> 
<input type="submit" value="Bitir ve Gönder"> 
</form> 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["question1"]) && 
isset($_POST["question2"])) { 
$answers = array( 
"question1" => "Php", 
"question2" => "Evet" 
); 
$user_answers = array( 
"question1" => $_POST["question1"], 
"question2" => $_POST["question2"] 
); 
$correct_count = 0; 
$incorrect_count = 0; 
foreach ($answers as $key => $value) { 
if ($user_answers[$key] === $value) { 
$correct_count++; 
} else { 
$incorrect_count++; 
} 
} 
$file_path = "test_sonuclari.txt"; 
$file = fopen($file_path, "a"); 
if ($file) { 
$content = "Doğru Cevap Sayısı: $correct_count, Yanlış Cevap Sayısı: $incorrect_count\n"; 
fwrite($file, $content); 
fclose($file); 
echo "<p>Test sonucu başarıyla şu dosyaya kaydedildi: $file_path</p>"; 
} else { 
echo "<p style='color: red;'>Dosya açılamadı veya yazılamadı.</p>"; 
} 
} 
?> 
</div> 
</body> 
</html>