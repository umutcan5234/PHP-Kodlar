<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
$ad = $_POST['ad']; 
$soyad = $_POST['soyad']; 
$eposta = $_POST['eposta']; 
$sifre = $_POST['sifre']; 
$cinss = $_POST['cinsiyet']; 
$telefon = $_POST['telefon']; 
if($cinss == 'Erkek'){ 
$cinsiyet = 'Erkek'; 
}elseif($cinss == 'Kadın'){ 
$cinsiyet = 'Kadın'; 
} 
$dogumtarihi = $_POST['gun'].'/'. $_POST['ay'] .'/'. $_POST['yil']; 
include ('conn.php'); 
$sql = "INSERT INTO kayit (ad, soyad, eposta, sifre, cinsiyet,dogumtarihi ,telefon) VALUES ('$ad', 
'$soyad', '$eposta', '$sifre', '$cinsiyet','$dogumtarihi','$telefon')"; 
} 
?> 
<!DOCTYPE html> 
<html lang="tr"> 
<head> 
<meta charset="UTF-8"> 
<title>İş Başvuru Formu</title> 
<style> 
body { 
font-family: Arial, sans-serif; 
background-color: blue; 
margin: 0; 
padding: 20px; 
} 
h2 { 
color: blue; 
text-align: center; 
} 
.form-container { 
background-color: white; 
padding: 20px; 
border-radius: 5px; 
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
max-width: 600px; 
margin: 0 auto; 
} 
table { 
width: 100%; 
border-collapse: collapse; 
} 
td { 
padding: 10px; 
vertical-align: top; 
border: 3px solid blue; 
} 
label { 
font-weight: bold; 
display: block; 
margin-bottom: 5px; 
} 
input[type="text"], 
input[type="email"], 
input[type="password"], 
input[type="tel"], 
select, 
textarea { 
width: 100%; 
padding: 8px; 
border: 3px solid blue; 
border-radius: 5px; 
box-sizing: border-box; 
background-color: white; 
color: black; 
} 
input[type="radio"], 
input[type="checkbox"] {  
margin-right: 5px; 
} 
input[type="submit"] { 
background-color: blue; 
color: white; 
padding: 10px 20px; 
border: none; 
border-radius: 5px; 
cursor: pointer; 
font-size: 15px; 
width: 100%; 
} 
input[type="submit"]:hover { 
background-color: white; 
} 
</style> 
</head> 
<body> 
<div class="form-container"> 
<form name="kayit.php" action="kayit.php" method="post"> 
<h2>İş Başvuru Formu</h2> 
<table border="3"> 
<tr> 
<td><input type="text" name="ad" size="25" placeholder="Adınız:" required /></td> 
<td><input type="text" name="soyad" size="25" placeholder="Soyadınız:" required /></td> 
</tr> 
<tr> 
<td colspan="2"><input type="email" name="eposta" style="width:100%" placeholder="E-Posta 
Adresiniz:" required /></td> 
</tr> 
<tr> 
<td><input type="password" name="sifre" size="25" placeholder="Şifreniz:" required /></td> 
<td><input type="password" name="sifre_tekrar" size="25" placeholder="Şifrenizi tekrar giriniz:" 
required /> 
</td> 
</tr> 
<tr> 
<td colspan="2"><input type="tel" name="telefon" style="width:100%" placeholder="Telefon 
Numaranız:" required /></td> 
</tr> 
<tr> 
<td colspan="2"> 
Cinsiyetinizi seçiniz: 
<input type="radio" name="cinsiyet" value="Erkek" /> Erkek 
<input type="radio" name="cinsiyet" value="Kadın" /> Kadın 
</td> 
</tr> 
<tr> 
<td colspan="2"> 
<select id="gun" name="gun" style="width:32%"> 
<option value="0">Gün</option> 
<!-- Gün seçenekleri buraya --> 
<?php for ($i = 1; $i <= 31; $i++) 
echo "<option value='$i'>$i</option>";  
?> 
</select> 
<select id="ay" name="ay" style="width:33%"> 
<option value="0">Ay</option> 
<option value="1">Ocak</option> 
<option value="2">Şubat</option> 
<option value="3">Mart</option> 
<option value="4">Nisan</option> 
<option value="5">Mayıs</option> 
<option value="6">Haziran</option> 
<option value="7">Temmuz</option> 
<option value="8">Ağustos</option> 
<option value="9">Eylül</option> 
<option value="10">Ekim</option> 
<option value="11">Kasım</option> 
<option value="12">Aralık</option> 
</select> 
<select id="yil" name="yil" style="width:33%"> 
<option value="0">Yıl</option> 
<!-- Yıl seçenekleri buraya --> 
<?php for ($i = 2024; $i >= 1980; $i--) 
echo "<option value='$i'>$i</option>";  
?> 
</select> 
</td> 
</tr> 
<tr> 
<td colspan="2"><label for="sozlesme">Üyelik Sözleşmesi şartlarını okudum ve kabul ediyorum. 
<input type="checkbox" id="sozlesme" required /></label></td> 
</tr> 
<tr> 
<td colspan="2"><input type="submit" value="Kaydet" id="" /></td> 
</tr> 
</table> 
</form> 
</div> 
</body> 
</html> 