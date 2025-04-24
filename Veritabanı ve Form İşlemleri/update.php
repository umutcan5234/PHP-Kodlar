<?php 
include "conn.php"; 
session_start(); 
if (!isset($_SESSION['isadmin'])) { 
header('Location: admin.php'); 
exit(); 
} 
if (isset($_GET['id'])) { 
$id = $_GET['id']; 
$sql = "SELECT * FROM kayit WHERE id=$id"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) { 
$row = $result->fetch_assoc(); 
} else { 
echo "Kayıt bulunamadı."; 
exit(); 
} 
} 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
$id = $_POST['id']; 
$ad = $_POST['ad']; 
$soyad = $_POST['soyad']; 
$eposta = $_POST['eposta']; 
$sifre = $_POST['sifre']; 
$cinsiyet = $_POST['cinsiyet']; 
$telefon = $_POST['telefon']; 
$dogumtarihi = date("Y-m-d", strtotime($_POST['yil'] . '-' . $_POST['ay'] . '-' . $_POST['gun']));
$update_sql = "UPDATE kayit SET ad='$ad', soyad='$soyad', eposta='$eposta', sifre='$sifre', 
cinsiyet='$cinsiyet', dogumtarihi='$dogumtarihi', telefon='$telefon' WHERE id=$id"; 
if ($conn->query($update_sql) === TRUE) { 
header('Location: adminpage.php'); 
exit(); 
} else { 
echo "Hata: " . $conn->error; 
} 
} 
?> 
<!DOCTYPE html> 
<html lang="tr"> 
<head> 
<meta charset="UTF-8"> 
<title>Kayıt Güncelle</title> 
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
rel="stylesheet"> 
<style> 
.container { 
max-width: 600px; 
margin: 0 auto; 
} 
h2 { 
text-align: center; 
margin-bottom: 20px; 
} 
.form-group { 
text-align: center; 
} 
.form-group label { 
display: block; 
text-align: left; 
} 
.row { 
display: flex; 
justify-content: center; 
} 
.col { 
flex: 1; 
max-width: 33%; 
padding: 5px; 
} 
button[type="submit"] { 
display: block; 
width: 100%; 
} 
</style> 
</head> 
<body> 
<div class="container mt-5"> 
<h2>Kayıt Güncelle</h2> 
<form action="update.php" method="post"> 
<input type="hidden" name="id" value="<?php echo $row['id']; ?>"> 
<div class="form-group"> 
<label for="ad">Adınız:</label> 
<input type="text" class="form-control" id="ad" name="ad" value="<?php echo $row['ad']; ?>" 
required> 
</div> 
<div class="form-group"> 
<label for="soyad">Soyadınız:</label> 
<input type="text" class="form-control" id="soyad" name="soyad" value="<?php echo $row['soyad']; 
?>" required> 
</div> 
<div class="form-group"> 
<label for="eposta">E-Posta Adresiniz:</label> 
<input type="email" class="form-control" id="eposta" name="eposta" value="<?php echo 
$row['eposta']; ?>" required> 
</div> 
<div class="form-group"> 
<label for="sifre">Şifreniz:</label> 
<input type="password" class="form-control" id="sifre" name="sifre" value="<?php echo $row['sifre']; 
?>" required> 
</div> 
<div class="form-group"> 
<label for="cinsiyet">Cinsiyetiniz:</label> 
<select class="form-control" id="cinsiyet" name="cinsiyet" required> 
<option value="Erkek" <?php if ($row['cinsiyet'] == 'Erkek') echo 'selected'; ?>>Erkek</option> 
<option value="Kadın" <?php if ($row['cinsiyet'] == 'Kadın') echo 'selected'; ?>>Kadın</option> 
</select> 
</div> 
<div class="form-group"> 
<label for="telefon">Telefon Numaranız:</label> 
<input type="tel" class="form-control" id="telefon" name="telefon" value="<?php echo $row['telefon']; 
?>" required> 
</div> 
<div class="form-group"> 
<label for="dogumtarihi">Doğum Tarihiniz:</label> 
<div class="row"> 
<div class="col"> 
<select class="form-control" id="gun" name="gun" required> 
<option value="">Gün</option> 
<?php for ($i = 1; $i <= 31; $i++) echo "<option value='$i'" . ($i == explode('/', $row['dogumtarihi'])[0] ? 
' selected' : '') . ">$i</option>"; ?> 
</select> 
</div> 
<div class="col"> 
<select class="form-control" id="ay" name="ay" required> 
<option value="">Ay</option> 
<?php 
$months = ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 
'Kasım', 'Aralık']; 
foreach ($months as $key => $month) { 
$value = $key + 1; 
echo "<option value='$value'" . ($value == explode('/', $row['dogumtarihi'])[1] ? ' selected' : '') . 
">$month</option>"; 
} 
?> 
</select> 
</div> 
<div class="col"> 
<select class="form-control" id="yil" name="yil" required> 
<option value="">Yıl</option> 
<?php for ($i = 2024; $i >= 1980; $i--) echo "<option value='$i'" . ($i == explode('/', 
$row['dogumtarihi'])[2] ? ' selected' : '') . ">$i</option>"; ?> 
</select> 
</div> 
</div> 
</div> 
<button type="submit" class="btn btn-primary">Güncelle</button> 
</form> 
</div> 
</body> 
</html> 
<?php $conn->close(); ?> 