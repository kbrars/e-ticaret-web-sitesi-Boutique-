<!DOCTYPE html>
<html>
<head>
	<title>Giriş Yap</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{
            background-color: black ;
            background-image: url("logom.jpg");
            
        }
        button:hover{
            
width: 25%;
height: 15%;
background-color:black;

        }
    </style>
</head>
<body>
     <form style="background-color: rgba(0, 0, 0, 0.735);" action="giris_islem.php" method="post">
     	<h2 style="color: white;">Giriş Yap</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
         <label style="color: white;" for="">E-mail:</label>
     	<input type="text" name="m_mail" placeholder="E-mail"><br>
<label style="color: white;" for="">Şifre:</label>
     	<input type="password" name="m_sifre" placeholder="Şifre"><br>

     	<button type="submit">Giriş Yap</button>
          <a style="color: white;" href="uyeolustur.php" class="ca">Hesap Oluştur</a>
     </form>
</body>
</html>