<?php 
include "conn.php"; 
session_start(); 
if(isset($_SESSION['isadmin'])) { 
if (isset($_GET['delete_id'])) { 
$delete_id = $_GET['delete_id']; 
$delete_sql = "DELETE FROM kayit WHERE id=$delete_id"; 
if ($conn->query($delete_sql) === TRUE) { 
echo "Kaydınız silinmiştir."; 
} else { 
echo "Hata: " . $conn->error; 
} 
} 
$sql = "SELECT * FROM kayit"; 
$result = $conn->query($sql); 
} else { 
header('Location: admin.php'); 
exit(); 
} 
?> 
<!DOCTYPE html> 
<html lang="tr"> 
<head> 
<meta charset="UTF-8"> 
<title>Başvuruları Yönet</title> 
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
rel="stylesheet"> 
<!-- Sayfanın her 30 saniyede bir yenilenmesini sağlayan meta etiketi --> 
<meta http-equiv="refresh" content="30"> 
</head> 
<body> 
<div class="container mt-5"> 
<h2>Başvurular</h2> 
<table class="table table-bordered"> 
<thead> 
<tr> 
<th>ID</th> 
<th>Ad</th> 
<th>Soyad</th> 
<th>E-Posta</th> 
<th>Telefon</th> 
<th>Cinsiyet</th> 
<th>Doğum Tarihi</th> 
<th>İşlemler</th> 
</tr> 
</thead> 
<tbody> 
<?php 
if ($result->num_rows > 0) { 
while ($row = $result->fetch_assoc()) { 
echo "<tr> 
<td>{$row['id']}</td> 
<td>{$row['ad']}</td> 
<td>{$row['soyad']}</td> 
<td>{$row['eposta']}</td> 
<td>{$row['telefon']}</td> 
<td>{$row['cinsiyet']}</td> 
<td>{$row['dogumtarihi']}</td> 
<td> 
<a href='adminpage.php?delete_id={$row['id']}' class='btn btn-danger btn-sm'>Sil</a> 
<a href='update.php?id={$row['id']}' class='btn btn-warning btn-sm'>Güncelle</a> 
</td> 
</tr>"; 
} 
} else { 
echo "<tr><td colspan='8'>Hiç kayıt bulunamadı.</td></tr>"; 
} 
?> 
</tbody> 
</table> 
</div> 
</body> 
</html> 
<?php $conn->close(); ?>