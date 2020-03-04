<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Free Software Company Website Template | Smarteyeapps.com</title>
 
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.theme.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
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
                        
                            <li><a href="index.html">Anasayfa</a> </li>
                            <li><a href="about_us.html">Ürünler</a></li>
                            <li><a  href="services.html">Bilgi</a></li>

                        <li style="color:blue;">
                             <?php session_start();
                            if (isset($_SESSION['kullaniciadi']))
                            {

                             echo ' ' . $_SESSION['kullaniciadi'] ;    
                            
                                 
                             echo '</li> <li><a style="color:red;" href="logout.php">Çıkış Yap</a></li>';

                            }
                             else{
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
    
    <!--################### Slider Starts Here #########################--->
    
    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item ">
                      <img class="d-block  w-100" src="assets/images/slider/slider_3.jpg" alt="First slide">
                    <div class="carousel-caption vdg-cur row">
                       <div class="col-md-5 image">
                           <img class="img animated bounceInLeft" src="images/guvenlik-kamerasi.png" alt="">
                       </div>
                       <div class="col-md-7  contblack">
                           <h5 class="animated bounceInDown">Güvenli Ellerdesiniz</h5>
                            <p class="animated bounceInRight">Kendinizi bize bırakın <br>
                             Sadece SecuriG</p>

                             <div class="row vbh">

                                 <div class="btn btn-info animated bounceInUp"> Securi G</div>
                             </div>
                       </div>
                        
                    </div>
                </div>
                
                <div class="carousel-item active">
                       <img class="d-block w-100" src="assets/images/slider/slider_1.jpg" alt="First slide">
                     <div class="carousel-caption vdg-cur row">
                       <div class="col-md-5">
                            <img class="img animated bounceInLeft" src="images/guvenlik-kamerasi.png" alt="">
                       </div>
                       <div class="col-md-7 whiteback contblack">
                           <h5 class="animated bounceInDown">EV VE IS YERİNİZDE GÜVENLİĞİNİZ TAM PERFORMANS</h5>
                            <p class="animated bounceInRight">Gözünüz Securi ile, Arkada Kalmasın</p>

                             <div class="row vbh"><br><br>

                             </div>
                       </div>
                        
                    </div>
                </div>
                
              
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    

    
      <!--################### Services Starts Here ####################--->
      <div class="our-services container-fluid">
        <div class="container">
            <div class="row session-title">
                <h2 style="color:red;">Hizmetlerimiz</h2>
               
            </div>
            <div class="row ser-row">
                <div class="col-md-4 serv-det">
                    <img src="https://d29fhpw069ctt2.cloudfront.net/icon/image/37728/preview.svg" style="height:75px;" alt="">
                    <h5>Ev</h5>
                    <p>Evinizin içine yerleştirebileceğiniz kameralarımıza buradan ulaşabiliirsiniz</p>
                </div>
                <div class="col-md-4 serv-det">
                     <img src="https://image.flaticon.com/icons/svg/189/189503.svg" style="height:75px;" alt="">
                    <h5>Bahçe</h5>
                    <p>Bahçenize veya evinizin önüne yerleştirebileceğiniz kameralarımıza buradan ulaşabiliirsiniz</p>
                </div>
                <div class="col-md-4 serv-det">
                     <img src="https://freeiconshop.com/wp-content/uploads/edd/car-flat.png" style="height:75px;" alt="">
                    <h5>Araç</h5>
                    <p>Aracınızın içine yerleştirebileceğiniz kameralarımıza buradan ulaşabiliirsiniz</p>
                </div>
                <div class="col-md-4 serv-det">
                     <img src="https://cdn4.iconfinder.com/data/icons/real-estate-glyph-circle/2048/644_-_Storage_Warehouse-512.png" style="height:75px;" alt="">
                    <h5>Depo</h5>
                    <p>Deponuzun içine yerleştirebileceğiniz kameralarımıza buradan ulaşabiliirsiniz</p>
                </div>
                <div class="col-md-4 serv-det">
                     <img src="https://www.nicepng.com/png/detail/191-1918328_office-icon-circle.png" style="height:75px;"  alt="">
                    <h5>Ofis</h5>
                    <p>Ofisinizin içine yerleştirebileceğiniz kameralarımıza buradan ulaşabiliirsiniz</p>
                </div>
                <div class="col-md-4 serv-det">
                     <img src="https://cdn0.iconfinder.com/data/icons/building-icons-rounded/110/Garage-512.png" style="height:75px;" alt="">
                    <h5>Garaj</h5>
                    <p>Garajınızın içine yerleştirebileceğiniz kameralarımıza buradan ulaşabiliirsiniz</p>
                </div>
            </div>
        </div>
    </div>
    
  
  
    
           

    
  
    
     <!--################### Blog Starts Here #######################--->
      <section class="our-blog">
         	<div class="container">
         		<div class="row session-title">
        			<h2> Blog </h2>
        			
        		</div>
        		<div class="blog-row row">
        			<div class="col-lg-4 col-md-6">
        				<div class="single-blog">
        					<figure>
        						<img src="https://ak9.picdn.net/shutterstock/videos/25355429/thumb/1.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | ŞUBAT 19 2020</small>
								<h4>Kamera Nedir</h4>
								<p> Kamera gördüğü yerin her anını kayıt altına alan ve o anda neler olup bittiğini kaydeden bir elektronik cihazdır.</p>
								<div class="link">
									<a href="">Daha Fazla </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="single-blog">
        					<figure>
        						<img src="https://ak9.picdn.net/shutterstock/videos/25355429/thumb/1.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | ŞUBAT 19 2020</small>
								<h4>Neden Kamera Taktırmalıyız</h4>
								<p> Özel mülkümüzün, canımızın güvenliği için kamera taktırmaıyız.</p>
								<div class="link">
									<a href="">Daha Fazla </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="single-blog">
        					<figure>
        						<img src="https://ak9.picdn.net/shutterstock/videos/25355429/thumb/1.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | ŞUBAT 19 2020</small>
								<h4>Neden Bizi Tercih Etmelisiniz</h4>
								<p> Bizi tercih etmenizin sebebi bu işi benimseyerek uzman kameracılarla yapmamızdır</p>
								<div class="link">
									<a href="">Daha Fazla </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        		</div>
         	</div>
         </section>
     
    
    <!--################### Footer Starts Here #########################--->
    
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