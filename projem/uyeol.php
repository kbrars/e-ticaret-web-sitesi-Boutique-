<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giriş/Üye ol</title>
  <link rel="stylesheet" href="inde.css">
  <link rel="stylesheet" href="giris.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&family=Shippori+Antique&display=swap"
      rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="giris.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<?php require_once 'header.php'; ?>




<div class="container">
    <div style="margin-top: 110px;"></div>
    <h1 class="well">Üye Kayıt Formu</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="projemislem/kayit.php" method="POST">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Ad-Soyad</label>
								<input style="width: 400%;" type="text" placeholder="Adınızı ve Soyadınızı Giriniz." name="m_adisoyadi" class="form-control">
							</div>
							
						</div>					
						<div class="form-group">
							<label>Adres:</label>
							<textarea style="width: 200%;" name="m_adres" placeholder="Lütfen Adresinizi Giriniz" rows="3" class="form-control"></textarea>
						</div>	
							
							
					
							
					<div class="form-group">
						<label>E-mail Adres:</label>
						<input  style="width: 200%;" type="text" name="m_mail" placeholder="Lütfen E-mail Adresinizi Giriniz" class="form-control">
					</div>	
                    		
					<div class="form-group">
						<label>Şifre:</label>
						<input  style="width: 200%;" type="password" name="m_sifre"  placeholder="Lütfen Şifre Oluşturunuz" class="form-control">
					</div>
                    <div class="form-group">
						<label>Telefon:</label>
						<input style="width: 200%;" type="text" name="m_telefon" placeholder="Lütfen Telefon Numaranızı Giriniz" class="form-control">
					</div>
    
                    <label style="margin-left: 50px;" for=""><b>Cinsiyet:</b> </label>
        <input style="margin-left: 7px;" type="radio" name="m_cinsiyet" value="Kadın" ><b>Kadın</b>
        <input type="radio" name="m_cinsiyet" value="Erkek"><b>Erkek</b>    <br> <br>
					
					<button type="submit"  name="uyeol" class="btn btn-lg btn-info">Üye ol</button>					
					</div>
                    
				</form> 
				</div>
	</div>
	</div>



<?php require_once 'footer.php' ?>
