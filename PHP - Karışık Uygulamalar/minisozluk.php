<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Mini Sözlük</title> 
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
select, input[type="submit"] { 
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
<h2>İngilizce - Türkçe Mini Sözlük</h2> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
<label for="word">Kelime Seçiniz:</label><br> 
<select id="word" name="word" required> 
<option value="">Kelimeler Listesi</option> 
<option value="apple">apple</option> 
<option value="banana">banana</option> 
<option value="orange">orange</option> 
<option value="strawberry">strawberry</option> 
<option value="grape">grape</option> 
<option value="lemon">lemon</option> 
<option value="watermelon">watermelon</option> 
<option value="pineapple">pineapple</option> 
<option value="cherry">cherry</option> 
<option value="pear">pear</option> 
<option value="apricot">apricot</option> 
<option value="peach">peach</option> 
<option value="plum">plum</option> 
<option value="kiwi">kiwi</option> 
<option value="melon">melon</option> 
<option value="blueberry">blueberry</option> 
<option value="raspberry">raspberry</option> 
<option value="blackberry">blackberry</option> 
<option value="cranberry">cranberry</option> 
<option value="pomegranate">pomegranate</option> 
</select><br><br> 
<input type="submit" value="Tıkla"> 
</form> 
<?php 
$dictionary = array( 
"apple" => "elma", 
"banana" => "muz", 
"orange" => "portakal", 
"strawberry" => "çilek", 
"grape" => "üzüm", 
"lemon" => "limon", 
"watermelon" => "karpuz", 
"pineapple" => "ananas", 
"cherry" => "kiraz", 
"pear" => "armut", 
"apricot" => "şeftali", 
"peach" => "şeftali", 
"plum" => "erik", 
"kiwi" => "kivi", 
"melon" => "kavun", 
"blueberry" => "yaban mersini", 
"raspberry" => "ahududu", 
"blackberry" => "böğürtlen", 
"cranberry" => "yaban mersini", 
"pomegranate" => "nar" 
); 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["word"])) { 
$word = $_POST["word"]; 
if (array_key_exists($word, $dictionary)) { 
echo "<p><strong>{$word}</strong> kelimesinin Türkçe karşılığı: 
<em>{$dictionary[$word]}</em></p>";  
} else { 
echo "<p><strong>{$word}</strong> kelimesi sözlükte bulunamadı.</p>"; 
} 
} 
?> 
</div> 
</body> 
</html>