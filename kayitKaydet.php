<?php 
    require("database_baglan.php");
    
    error_reporting(0); //Notice'leri gosterilmemesi için

    extract($_POST);//Formdaki nameleri direct kullanabilmek için

    
    if(isset($submit)){//form submit edilmişse
        $password = hash('sha256',$password);//password'u hashlanmis hali olsun 

        $control_query = "SELECT * FROM kullanicitable WHERE AdSoyad = '$username' and Pass_word = '$password'";

        $control_cevap = mysqli_query($MySql_Baglanti,$control_query);
        $rows = mysqli_num_rows($control_cevap);
        if($rows == 1){
            echo "<h1> Bu Kullanici Zaten Kayitlidir!!! </h1>";
            echo "<h2> Giris Yapmak İçin <a href='GirisSayfasi.php'>Tiklayiniz</a> </h2> ";
        }
        else{
            $mysql_query = "INSERT INTO kullanicitable(AdSoyad,Mail,Tel,Cinsiyet,Pass_word)";
            $mysql_query = $mysql_query."VALUES ('$username','$email','$tel','$cinsiyet','$password');";

            $cevap = mysqli_query($MySql_Baglanti,$mysql_query);

            if($cevap){//işlem başarılıysa
                echo "<h1>Kayit Islemi Basariyla Tamamlanmistir!!!</h1>";
                echo "<br> <br>";
                
                echo "<h2> Giris Yapmak İçin <a href='GirisSayfasi.php'>Tiklayiniz</a> </h2> ";
            }
            else{//İşlem başarısız ise
                echo "<h1>Kayit Islemi Basarisizdir!!!</h1>";
            }

        }
        
    }

    mysqli_close($MySql_Baglanti);

?>
