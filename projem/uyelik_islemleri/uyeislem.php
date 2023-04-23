<?php 
session_start(); 
include "baglanti.php";

if (isset($_POST['m_mail']) && isset($_POST['m_sifre']))
 {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$m_mail = validate($_POST['m_mail']);
	$m_sifre = validate($_POST['m_sifre']);
	$isim = validate($_POST['m_adisoyadi']);
	$m_telefon = validate($_POST['m_telefon']);
	$m_cinsiyet = validate($_POST['m_cinsiyet']);
	$m_adres = validate($_POST['m_adres']);
	$kullanici_bilgi = 'm_mail='. $m_mail. '&m_adisoyadi='. $isim .'&m_telefon='. $m_telefon. '&m_adres='. $m_adres;


	if (empty($m_mail)) {
		header("Location: uyeolustur.php?error=Kullanıcı adı gerekli&$kullanici_bilgi");
	    exit();
	}else if(empty($m_sifre)){
        header("Location: uyeolustur.php?error=Şifre adı gerekli&$kullanici_bilgi");
	    exit();
	}
	

	else if(empty($isim)){
        header("Location: uyeolustur.php?error=Ad soyad gerekli&$kullanici_bilgi");
	    exit();
	}
	else if(empty($m_telefon)){
        header("Location: uyeolustur.php?error=Telefon gerekli&$kullanici_bilgi");
	    exit();
	}
	

	else if(empty($m_adres)){
        header("Location: uyeolustur.php?error=adres gerekli&$kullanici_bilgi");
	    exit();
	}
	else if(empty($m_cinsiyet)){
        header("Location: uyeolustur.php?error=adres gerekli&$kullanici_bilgi");
	    exit();
	}




	else{

        $m_sifre = md5($m_sifre);

	    $sql = "SELECT * FROM musteribilgi WHERE m_mail='$m_mail' ";
		$sonuc = mysqli_query($conn, $sql);

		if (mysqli_num_rows($sonuc) > 0) {
			header("Location: uyeolustur.php?error=Kullanıcı adı alınmış&$kullanici_bilgi");
	        exit();
		}else {
           $sql2 = "INSERT INTO musteribilgi (m_mail, m_sifre, m_adisoyadi , m_telefon , m_adres,m_cinsiyet) VALUES('$m_mail', '$m_sifre', '$isim' ,'$m_telefon', '$m_adres','$m_cinsiyet')";
           $sonuc2 = mysqli_query($conn, $sql2);
           if ($sonuc2) {
           	 header("Location: anasayfa.php?success=Hesabınız başarılı bir şekilde oluşturuldu");
	         exit();
           }else {
	           	header("Location: uyeolustur.php?error=Bilinmeyen hata&$kullanici_bilgi");
		        exit();
           }
		}
	}
	
}else{
	header("Location: uyeolustur.php");
	exit();
}