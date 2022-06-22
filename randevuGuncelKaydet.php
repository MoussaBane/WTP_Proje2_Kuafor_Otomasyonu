<?php
    require('database_baglan.php');

    error_reporting(0); //Notice'leri gosterilmemesi için 

    //degiskenler formdan almak için
    extract($_POST);


    $sql ="UPDATE randevutable SET Model='$Model',RandevuTarih='$RandevuTarih',RandevuSaat='$RandevuSaat' WHERE ID= ".$_GET['id'];
    //sorguyu veritabanina gönderiyoruz.
    $cevap = mysqli_query($MySql_Baglanti,$sql);
    echo "<html>";

        echo "<meta http-equiv='Content-Type'content='text/html; charset=UTF-8' /> ";

        //Guncellenmemişse olusan hatayı yazdırılır 
        if(!$cevap){
            echo '<br>Hata:' . mysqli_error($MySql_Baglanti);
        }
        else{
            echo "Kayit Gunceleme Islemi Basariyla Tamamlanmistir!!!</br>";
            echo "<p style='font-family: cooper black;'> Ana Sayfaya Donmek Icin <a href='index.php'> Tiklayiniz</a> </p>";
            echo "<p style='font-family: cooper black;'> Giris Yapmak Icin <a href='GirisSayfasi.php'> Tiklayiniz</a> </p>";
        }
    echo "</html>";
    
?>

