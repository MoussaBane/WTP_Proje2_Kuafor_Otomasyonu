<?php 
    //Oturum mevcutse bu sayfaya ulaşıldığı zaman var olan oturum sonlandirilsin
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html >
<head>
    <title>Kuafor Otomasyon AnaSayfasi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
</head>
<body style="background-image: url('Images/BG_Image5.jpg');">
    <div class="container d-flex align-items-center justify-content-center text-center h-100" id="intro">
        <div class="jumbotron">
            <img src="Images/BG_Image1.jpg" class="rounded float-start" align="right" width="250" height="250">
            <img src="Images/BG_Image2.png" class="rounded float-end" align="left" width="250" height="250">
            <h1 align="center" style="font-family: Arial Black; font-size:xx-large">KING AND QUEEN BERBER</h1>
            <a class="btn btn-outline-light btn-lg m-2" href="tel:+90 544 988 02 27" role="button" style="background-color: rgba(0, 0, 0, 0.8)">Hemen arayın</a> 
            
            <br> <br> <br> <br>


            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li class="active"><a class="btn btn-outline btn-lg m-2" href="index.php"> <b>Ana Sayfa</b> </a> </li>
                        <li> <a class="btn btn-outline btn-lg m-2" href="GirisSayfasi.php"> <b> Giris Yap  </b> </a> </li>
                        <li> <a class="btn btn-outline btn-lg m-2" href="kayitSayfasi.php"> <b> Kayit Ol </b> </a> </li>
                    </ul>
                </div>
            </nav>
        
        </div>

      

        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:aqua">
                <h3>Hangi Modeli Yapacağinizi Mi Bilmiyorsunuz ?</h3>
            </div>
            <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"> <a href="https://fr.dreamstime.com/photos-images/coiffeur.html"> <b>Karisik Modeller</b> </a> </li>
                    <li> <a href="https://www.google.com/search?sxsrf=ALiCzsa167jjC-cbz2lcNbWTZB4MjQt82g:1655507550768&q=coiffure+pour+homme+noir&tbm=isch&chips=q:coiffure+pour+homme+noir,online_chips:coupe+courte:AywjIRO1Dsg%3D&usg=AI4_-kS-ejb77La1ADsdsPlAlIlsP9kMBw&sa=X&ved=2ahUKEwjS8vGbzrX4AhWrSvEDHa7XAl8QgIoDKAZ6BAgDEBQ&biw=1242&bih=568&dpr=1.1">
                        <b> Erkek İcin Modeller </b>  </a> 
                    </li>
                    <li> <a href="https://www.google.com/search?q=coiffure+pour+femme&tbm=isch&ved=2ahUKEwjY0o6gzrX4AhUjg_0HHQHJDtEQ2-cCegQIABAA&oq=coiffure+pour+femme&gs_lcp=CgNpbWcQARgAMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDoECCMQJzoGCAAQHhAHOgYIABAeEAVQhRNY5C9giU1oAHAAeACAAeIBiAGUDpIBBjAuMTIuMZgBAKABAaoBC2d3cy13aXotaW1nwAEB&sclient=img&ei=ZwqtYpiDJqOG9u8PgZK7iA0&bih=568&biw=1242">
                        <b> Kadin İcin Modeller </b> </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-widget__column footer-widget__explore clearfix">
            <div class="row">
                <div class="col-sm-5" style="background-color:black" >
                    <p class="footer-widget__text" style="background-color: white;"><b>Bize Ulas</b></p>
                    <ul class="list-unstyled footer-widget__contact-list">
                        
                        <li>
                            <div class="icon">
                                <i style="color: white" class="fa-phone-square-alt"></i>
                            </div>
                            <div class="text">
                                <p><a href="https://github.com/MoussaBane/WTP_Proje2_Kuafor_Otomasyonu"><b>GitHub Repo</b></a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i style="color: white" class="fa-phone-square-alt"></i>
                            </div>
                            <div class="text">
                                <p><a href="tel:+90 544 988 02 27"><b>+90 544 988 02 27</b></a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i style="color: white" class="fa-envelope"></i>
                            </div>
                            <div class="text">
                                <p><a href="mailto:king.and.quen.berber@gmail.com"><b>king.and.queen.berber@gmail.com</b></a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i style="color: white" class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="text">
                                <p><b>Hamdalay ACI2000, Bamako/Mali</b></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-7">
                    <img src="Images/Simge3.png" class="rounded float-start" width="100%" height="200">
                </div>
            </div>
        </div>

        <div class="well well-sm" style="font-family: cooper black;">
            <p align="center"><b>KING AND QUEEN BERBER</b>  
                <br> Hiç şüphe yok ki bu güzellik endüstrisi çok büyük. Kuaförlükle ilgili en iyi şey, müşteriyi elde tutma fırsatlarıdır.<br>
                <b>"Saçınızı daha iyi süslemenizi sağlar."</b> &copy 2022.
            </p>
        </div>
    </div>
    
</body>
</html>
