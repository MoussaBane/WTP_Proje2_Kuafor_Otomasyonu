<?php
    session_start();

    require('database_baglan.php');
    extract($_POST);

    if (isset($submit) ){
        // sifre metni SHA256 ile şifreleniyor.
        $password = hash('sha256', $password);
        $sql_query = "SELECT * FROM `kullanicitable` WHERE AdSoyad='$username' and  Pass_word='$password' ";

        $cevap = mysqli_query($MySql_Baglanti, $sql_query);
        //eger cevap FALSE ise hata yazdiriyoruz. 
        if(!$cevap ){
            echo '<br>Hata:' . mysqli_error($MySql_Baglanti);
        }


        //veritabanindan dönen satır sayısını bul
        $SatirSayisi = mysqli_num_rows($cevap);
        if ($SatirSayisi == 1){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
        }else{
            $mesaj = "<h1> Hatali Kullanici Adi veya Sifre</h1>";
            include('kullaniciGirisFormu.php');
        }

        if (isset($_SESSION['username']) && isset($_SESSION['password'])){//session mevcut ise
            $gelen = mysqli_fetch_array($cevap);//gelen satiri
    
            if($gelen["Kategori"] === "ADMIN"){
                header("Location: adminKullaniciSayfasi.php");
            }
            else if($gelen["Kategori"] === "KULLANICI"){//Admin degilse kullanicidir
                header("Location: kullaniciSayfasi.php");
            }
            
        }
    }
    else{
        //oturum yok ise login formu görüntüle
        include('kullaniciGirisFormu.php');
    }    
?>





   
    







