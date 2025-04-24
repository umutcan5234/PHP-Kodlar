<?php 
session_start();  
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
$kulladi = $_POST['username']; 
$sifre = $_POST['password']; 
if($kulladi == "umutcan" && $sifre == "123"){ 
$_SESSION['isadmin'] = "True"; 
header('Location: adminpage.php');  
exit();  
} 
} 
?> 
<!DOCTYPE html> 
<html lang="tr"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
<title>Kullanıcı Girişi</title> 
<!-- Bootstrap CSS --> 
<link href=https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css rel="stylesheet"> 
<style> 
body { 
display: flex;  
justify-content: center; 
align-items: center; 
text-align: center; 
height: 100vh; 
background-color: blue; 
} 
.login-container { 
max-width: 400px; 
padding: 40px; 
border-radius: 30px; 
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
background-color: #fff; 
} 
.login-container h2 { 
text-align: center; 
margin-bottom: 30px; 
} 
.login-container .form-group { 
margin-bottom: 30px; 
} 
</style> 
</head> 
<body> 
<div class="login-container"> 
<h2>Kullanıcı Girişi</h2> 
<form action="" method="post"> <!-- Form action boş bırakılarak aynı sayfaya gönderilir --> 
<div class="form-group"> 
<label for="username">Kullanıcı Adı</label> 
<input type="text" class="form-control" id="username" name="username" placeholder="Kullanıcı 
Adınız:" required> 
</div> 
<div class="form-group"> 
<label for="password">Şifre</label> 
<input type="password" class="form-control" id="password" name="password" 
placeholder="Şifreniz:" required> 
</div> 
<button type="submit" class="btn btn-primary btn-block">Giriş Yap</button> 
</form> 
</div> 
<!-- Bootstrap JS and dependencies --> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body> 
</html>