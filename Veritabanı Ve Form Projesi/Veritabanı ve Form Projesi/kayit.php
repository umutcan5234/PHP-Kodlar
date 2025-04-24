<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
include 'conn.php'; 
$ad = $_POST['ad']; 
$soyad = $_POST['soyad']; 
$eposta = $_POST['eposta']; 
$sifre = $_POST['sifre']; 
$telefon = $_POST['telefon']; 
$cinsiyet = $_POST['cinsiyet']; 
 $gun = $_POST['gun'];
    $ay = $_POST['ay'];
    $yil = $_POST['yil'];
    $dogumtarihi = date("Y-m-d", strtotime("$yil-$ay-$gun"));
$sql = "INSERT INTO kayit (ad, soyad, eposta, sifre, cinsiyet,dogumtarihi ,telefon) VALUES ('$ad', 
'$soyad', '$eposta', '$sifre', '$cinsiyet','$dogumtarihi','$telefon')"; 
echo "Adı: " . $ad; echo"<br>"; 
echo "Soyadı: " . $soyad; echo"<br>"; 
echo "E-Posta Adresi: " . $eposta; echo"<br>"; 
echo "Şifresi: " . $sifre; echo"<br>"; 
echo "Telefon Numarası: : " . $telefon; echo"<br>"; 
echo "Cinsiyeti: " . $cinsiyet; echo"<br>"; 
echo "Doğum Tarihi: " . $dogumtarihi; echo"<br>"; 
echo "<hr size='8' color='blue' width='320' align='left'>"; 
} 
if ($conn->query($sql) === TRUE) { 
echo "Başvurunuz kaydedilmiştir."; 
} else { 
echo "Hata: " . $sql . "<br>" . $conn->error; 
} 
$conn->close(); 
?> 