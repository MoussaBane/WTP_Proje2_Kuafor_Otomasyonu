# Web Tabanlı Programlama Dersi Proje2
Web Tabanlı Programlama Dersi ikici projet olarak PHP, Mysql ve Bootstrap kullanarak bir Kuaför otomasyonu seçtim.

# Kendi Bilgisayarıma Bu Kodları Nasıl İndirebilirim?

![image](https://user-images.githubusercontent.com/75726215/175116882-bdcea4dd-450a-4efc-ba5a-cf0a493bc458.png)

Yukarıdaki görüntüde gördüğünüz üzere .zip uzantılı olarak hem kodları hem de resimleri indirmiş olursunuz.

# Bu Kodları Bilgisayarımda Nasıl Çalıştırabilirim?
  Bilgisayarınızda Xampp kurulu değilse ilk önce onu kurmanız gerekmektedir.
  https://www.apachefriends.org/fr/download.html link üzerinden bilgisayarınıza uygun olan xampp'i indirebilirsiniz.
 Xamp kurulumu nasıl yapmalıyım?
  https://www.youtube.com/watch?v=OHcMNNV5V6k videodan kurulumunuzu yapabilirsiniz.
  
  
  # Xampp kurulumunuzu tamamladıktan sonra:
  ![image](https://user-images.githubusercontent.com/75726215/175119851-ba5322f0-d2ad-40af-a2b5-bca720c5941b.png)
  ![image](https://user-images.githubusercontent.com/75726215/175120167-18e4d8a1-1f75-402e-a710-37a0e66ede41.png)
  ![image](https://user-images.githubusercontent.com/75726215/175120287-a21a3b52-ccfd-4136-ad67-3d88a6ae775f.png)
  Şu Yukarıdaki 3 görseldeki adımları takip ederek apache ve mysql başlatmış olursunuz.
    
  Ondan sonra indirdiğiniz .zip uzantılı dosyadaki dosyaları htdocs/ içinde yeni bir klasör içine yerleştiriniz. Daha iyi anlamak için bu aşağıdaki resimi inceleyeiniz. 
  ![image](https://user-images.githubusercontent.com/75726215/175121596-d72d750b-a785-4de5-ace7-7f6c730b1080.png)
    
  #Ardından:
  Ya visual studio code ya da notepad kullanarak database_baglan.php dosyası açınız.
  ![image](https://user-images.githubusercontent.com/75726215/175123253-2a08a472-62f2-40a7-9638-5f6ef2dc0bfb.png)

  Yukarıdaki resimde kırmızı çizgi içindeki kısım sunucu adi, kullanici adi, şifre ve veritabanı bilgilerdir. 

![image](https://user-images.githubusercontent.com/75726215/175129954-1c9a73e9-e4e7-4b40-9857-eeefa9e8b82a.png)

  Yukaridaki kodun aynısını database_baglan.php dosyanızda Ctrl+A ardından Delete butonuna bastıktan sonra, yazarak ve kaydederek database_baglan.php dosyanızı           bilgisayarınızda çalışabilmek hale gelmiş olur.

  #Son İşlem Olarak: 
  ![image](https://user-images.githubusercontent.com/75726215/175125685-932cfbea-0df9-4fd4-b7b8-187f57aaa24f.png)

  Resimde gösterildiği gibi Mysql satırında Admin butonuna tiklayarak veya şu linke http://localhost:8080/phpmyadmin/ tiklayarak phpmyadmin sayfasına ulaşabilirsiniz.

  ![image](https://user-images.githubusercontent.com/75726215/175126873-30deea41-4c96-4b11-935e-d8e10e5d8065.png)
  ![image](https://user-images.githubusercontent.com/75726215/175127172-e2fe2b5a-224e-4428-9c95-678d16fdc5fc.png)
  ![image](https://user-images.githubusercontent.com/75726215/175127435-13dccf18-370c-4cfb-bb25-4d2f2e97ee49.png)

  Şu yukarıdaki resinlerdeki adımları takip ederek .sql uzantılı dosya import etmiş olursunuz ve artık kullandıgım veritabani bilgisayarınızda olur.

  Son olarak http://localhost:8080/YeniKlasorunuz YeniKlasorunuz denen htdocs/ klasöründe oluşturduğunuz ve indirdiginiz kodlarınız içeren klasörün adıdır.
  O klasörü index.php dosyası içerdiği için direk index.php yani otomasyonun ana sayfası açılacaktır.
  
  
  # Nasıl Çalışır?
  Ana Sayfaya herkes ulaşabilmektedir. Menude Ana Sayfa ana sayfayı refresh veya ana sayfaya link vermektedir. Kayit Olmak İçin Kayit Ol butona tiklayarak
  kayıt kayıt işlemi gerçekleşebilirsiniz. Kullanıcı adınız ve şifrenizi kullanarak giriş yapabilirsiniz.
  
  Default olarak kayıt olan herkesi KULLANICI'dir. Bir kullanıcı Admin Kullanıcı yapmak isterseniz database'e girip kullanicitable adlı tabloda Kategori sütunda
  KULLANICI yerine ADMIN yazmanız gerekmektedir.
  
  Giriş işlemi başarılı ise kullanıcı kategorisine göre ya Admin ya da kullanıcıya özel sayfaya yönlendirilir.
  Bir kullanıcı sadece kendi bilgileri görebilmektedir. Ve isterse o bilgileri güncelleyebilir veya silebilir.
  Bir Admın ise bütün kullanıcıların bilgileri görebilmektedir ve silebilir fakat güncellemez. Admin olup ve bir kullanıcının bilgileri güncellemek isterse 
  database üzerinden yapması gerekir.
  
# DEMO İÇİN Aşağıdaki Linke Tiklayınız: 
http://kral-kuafor-otomasyon.malibaweb.com/   

#Admın Sayfası Nasıl Olduğunu Görmek isterseniz:
Giriş Formunda, Kullanıcı Adı olarak MoussaBane ve şifre olarak da 1234 girerek MoussaBane adlı admın kullanıcı özel sayfasına olaşmış olursunuz.



