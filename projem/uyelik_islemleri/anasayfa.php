<?php 
session_start();

if (isset($_SESSION['m_id']) && isset($_SESSION['m_mail'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ana Sayfa</title>
	<link rel="stylesheet" type="text/css" href="style.css">

<style>

    .hg{
        width: 50%;
        height: 50%;
        background-color:rgba(0, 0, 0, 0.735) ;
       
    }
    a{
        text-decoration: none;
    }
</style>


</head>
<body>
    <div class="hg"> 
     <h1 style="color:white; font-size:50px " >Hoşgeldin  <?php echo $_SESSION['m_adisoyadi']; ?></h1>
     <a style="  margin-left:25%; font-size:40px" href="cikis.php">Çıkış Yap</a> <br> <br>
     <a  style=" margin-left:25%;  font-size:40px" href="../uyesayfasi.php">Anasayfa</a>
    </div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>