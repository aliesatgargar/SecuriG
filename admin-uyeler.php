<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SecuriG - Üyeler</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
   


    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.theme.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.css" />
</head>

<body>
    <!--################### Header Starts Here #########################--->
    
    <header>
        <div class="header-top container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6  d-none d-lg-block contact-det">
                        <ul>
                            <li><i class="fas fa-headset"></i> 0535 682 8446</li>
                            <li><i class="far fa-envelope"></i> esatgargar@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 social-link">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Medipol Üniversitesi </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-jk" class="header-nav container-fluid">
            <div class="container">
               <div class="row">
                     <div class="col-md-4 logo">
                           <img src="\assets\images\logo.png" alt="" style="height:55px">
                           <a data-toggle="collapse" data-target="#nav-head" href="#nav-head" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="nav-head" class="col-md-8 d-none d-md-block nave">
                        <ul>
                        
                            <li><a href="uyeler.php">Üyeler</a> </li>
                            <li><a href="urunler.php">Ürünler</a></li>
                            <li><a  href="siparis.php">Sipariş</a></li>

                        <li style="color:blue;">
                             <?php session_start();
if (isset($_SESSION['kullaniciadi']))
{

    echo ' ' . $_SESSION['kullaniciadi'];

    echo '</li> <li><a style="color:red;" href="logout.php">Çıkış Yap</a></li>';

}
else
{
    echo "<li><a style=color:green; href='kayitol.php'>Üye Ol</a></li>";
    echo "<li><a style=color:red; href='girisyap.php'>Giriş Yap</a></li>";

}

?></li>
                                    
                        </ul>
                    </div>
               </div>
              
            </div>
        </div>
    </header>
        
    <div class="slider-detail" style="margin-left:20%">
     
    <?php

$baglanti = new mysqli("localhost", "root", "", "esat");

$sql = "SELECT * FROM uyeler";
$sorgu = mysqli_query($baglanti, $sql);
while ($sonuc = mysqli_fetch_assoc($sorgu))
{

    echo ' <table id="example" class="" cellspacing="0" width="100%">';
    echo ' <thead>';
    echo '<tr>';

    echo '<th>';
    echo $sonuc["kullaniciadi"];
    echo '</th>';

    echo '<th>';
    echo $sonuc["sifre"];
    echo '</th>';

    echo '<th>';
    echo $sonuc["mail"];
    echo '</th>';

    echo '<th>';
    echo $sonuc["kayitTarihi"];
    echo '</th>';

    echo '</tr>';

    echo '</thead>';

    echo '</table>';
}
?>

    </div>
    

    
      <!--################### Services Starts Here ####################--->
      <div class="our-services container-fluid">
        <div class="container">
         
        </div>
    </div>
    
    
         	<div class="container">
         		
        		</div>
         	</div>

     
    
   
    
    <footer>
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 foot-about">
                        <h4>Hakkımızda</h4>
                        
                        <p>Bu işe yeni girmiş uzmanlar olarak farklı şirketlerde uzun süreli çalışmalarımız olmuştur ve bu kadar iyi çalışmaları kendimiz daha güzel şekilde sizlere hizmet verebilmek amacıyla kendi markamızı oluşturduk.</p>
                        
                        <ul>
                            <li>Medipol Üniversitesi</li>
                            <li>esatgargar@gmail.com</li>
                            <li>0535 682 8446</li>
                        </ul>
                    </div>
                    
                     <div class="col-md-3 foot-post">
                        <h4>Blog</h4>
                        
                        <div class="post-row">
                            <div class="image">
                                <img src="https://ak9.picdn.net/shutterstock/videos/25355429/thumb/1.jpg" style="width:100px;" alt="">
                            </div>
                            <div class="detail">
                                <p>Kamera Nedir </p>
                            </div>
                        </div>
                        
                        <div class="post-row">
                            <div class="image">
                                <img src="https://ak9.picdn.net/shutterstock/videos/25355429/thumb/1.jpg" style="width:120px;" alt="">
                            </div>
                            <div class="detail">
                                <p>Neden Kamera Taktırmalıyız  </p>
                            </div>
                        </div>
                        
                        <div class="post-row">
                            <div class="image">
                                <img src="https://ak9.picdn.net/shutterstock/videos/25355429/thumb/1.jpg" style="width:120px;" alt="">
                            </div>
                            <div class="detail">
                                <p>Neden Bizi Tercih Etmelisiniz  </p>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-md-3 foot-services">
                        <h4>Servislerimiz</h4>
                        
                        <ul>
                            <li><a href="">Ev</a></li>
                            <li><a href="">Bahçe</a></li>
                            <li><a href="">Araç</a></li>
                            <li><a href="">Depo</a></li>
                            <li><a href="">Ofis</a></li>
                            <li><a href="">Garaj</a></li>
                        </ul>
                    </div>
                    
                     <div class="col-md-3 foot-news">
                        <h4>Mail Abonesi</h4>
                        <p>Mail bültenimize kayıt olmak ister misiniz? </p>
                        
                        <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Mail Adresiniz" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2"><i class="fas fa-long-arrow-alt-right"></i></span>
  </div>
</div>
                        
                        <ul>
                            <li><i class="fab fa-facebook-square"></i></li>
                            <li><i class="fab fa-twitter-square"></i></li>
                            <li><i class="fab fa-linkedin"></i></li>
                            <li><i class="fab fa-tumblr-square"></i></li>
                            <li><i class="fab fa-github-square"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy">
            <div class="container">
                <a href="">2020 &copy; Tüm hakları Saklıdır | Ali Esat Gargar</a>
                
               
            </div>

        </div>
</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>


</html>
