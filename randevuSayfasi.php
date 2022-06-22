<?php 
    include("sessionKontrol.php");//oturum kontrolu
    
    error_reporting(0); //Notice'leri gosterilmemesi için 
    
    require('database_baglan.php');


    if(isset($_POST['submit'])){//Randevu formu doldurmuşsa

        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        
        extract($_POST);


        $query = "SELECT * FROM kullanicitable WHERE AdSoyad = '$username'";
        $cevap = mysqli_query($MySql_Baglanti,$query);
        
        $gelen = mysqli_fetch_array($cevap);
        $ID = $gelen["ID"];

        if($cevap){

            $kaydet_query = "INSERT INTO randevutable(Kullanici_ID,Model,RandevuTarih,RandevuSaat) VALUES ('$ID','$Model','$RandevuTarih','$RandevuSaat'); ";
            
            $yeni_cevap = mysqli_query($MySql_Baglanti,$kaydet_query);
    
            if($yeni_cevap){//işlem başarılıysa
                echo "<h1>Randevunuzu Basariyla Alinmistir!!!</h1>";
                echo "<br> <br>";
                
                echo   '<span style="font-family: cooper black;">KULLANICI Sayfasina Dönemek İçin </span>' ;
                echo   '<a href="kullaniciSayfasi.php"> <b> Tiklayiniz </b> </a>'  ; 
               
            }
            else{//İşlem başarısız ise
                echo "<h1>Randevu İşleminizi Basarisiz Olmustur Birazdan Tekrar Deneyin!!!</h1>";
               
                echo   '<span style="font-family: cooper black;">KULLANICI Sayfasina Dönemek İçin </span>' ;
                echo   '<a href="kullaniciSayfasi.php"> <b> Tiklayiniz </b> </a>'  ; 
            }
        }

    }
    else{//Randevu formu doldurmamışsa formu tekrar gözüksün
        header("Location: randevuFormu.php");
    }
?>


           

            
        