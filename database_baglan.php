<?PHP 
    $ServerName = 'localhost';
    $UserName = 'root';
    $PassWord = '';
    $DataBaseName = 'otomasyon_database';

    $MySql_Baglanti = mysqli_connect($ServerName,$UserName,$PassWord,$DataBaseName);

    if(!$MySql_Baglanti){//Baglanti kurulmadıysa hata gosterilsin
        
        echo "<h2>Database'e baglanti olusturulamadi !!!</h2> <br>";

        echo "<b>Baglanti Hatasi:</b> ".mysqli_connect_error($MySql_Baglanti);

        exit;
    }
?>