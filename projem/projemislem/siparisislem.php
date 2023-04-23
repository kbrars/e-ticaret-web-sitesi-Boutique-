<?php
include 'baglanti.php';

{
    if (isset($_POST['siparisekle'])) {

        $siparisekle = $baglanti->prepare("INSERT INTO siparisler SET 
        
        sepet_id=:sepet_id,
        m_id=:m_id,
        hesap=:hesap,
        durumu=:durumu,
        urun_id=:urun_id");

        $islem = $siparisekle->execute(array(
            'sepet_id' => $_POST['sepet_id'],
            'm_id' => $_POST['m_id'],
            'hesap' => $_POST['hesap'],
            'durumu' => $_POST['durumu'],
            'urun_id' => $_POST['urun_id']
        ));
        if ($islem) {
            header("Location:../uyesayfasi.php?durum=ok");
        } else {
            header("Location:../../kategori.php?durum=no");
        }
    }
}