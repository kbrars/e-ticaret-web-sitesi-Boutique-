<?php 
session_start(); 
include "baglanti.php";

if (isset($_POST['m_mail']) && isset($_POST['m_sifre'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$m_mail = validate($_POST['m_mail']);
	$m_sifre = validate($_POST['m_sifre']);
	$m_telefon = validate($_POST['m_telefon']);
	$m_adres = validate($_POST['m_adres']);




	if (empty($m_mail)) {
		header("Location: index.php?error=Kullanıcı adı gerekli");
	    exit();
	}else if(empty($m_sifre)){
        header("Location: index.php?error=Şifre gerekli");
	    exit();
	}else{

        $m_sifre = md5($m_sifre);

        
		$sql = "SELECT * FROM musteribilgi WHERE m_mail='$m_mail' AND m_sifre='$m_sifre'";

		$sonuc = mysqli_query($conn, $sql);

		if (mysqli_num_rows($sonuc) === 1) {
			$row = mysqli_fetch_assoc($sonuc);
            if ($row['m_mail'] === $m_mail && $row['m_sifre'] === $m_sifre) {
            	$_SESSION['m_mail'] = $row['m_mail'];
            	$_SESSION['m_adisoyadi'] = $row['m_adisoyadi'];
            	$_SESSION['m_id'] = $row['m_id'];
				$_SESSION['m_telefon'] = $row['m_telefon'];
				
				$_SESSION['m_adres'] = $row['m_adres'];
            	header("Location: anasayfa.php");
		        exit();
            }else{
				header("Location: index.php?error=Kullanıcı adı veya şifre hatalı");
		        exit();
			}
		}else{
			header("Location: index.php?error=Kullanıcı adı veya şifre hatalı");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
