<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script async="" src="assets/a.js"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('a.js', new Date());

    gtag('config', 'G-SEHGSBHPG3');
  </script>

  <script async="" src="assets/a1.js"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('a.js', new Date());

    gtag('config', 'G-4Y0PSQK63B');
  </script>

  <title>Portal Banyumas Kota Lama</title>
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">



  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/mockup_logo_brand.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/mockup_logo_brand.png">
  <meta name="msapplication-TileColor" content="#ffffff">

  <meta name="theme-color" content="#ffffff">
  <!-- main template stylesheet -->
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="assets/responsive.css">
  <!-- bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">




  <style type="text/css">
    .button {
      padding: 10px 20px;
      font-size: 24px;
      text-align: center;
      cursor: pointer;
      outline: none;
      color: #fff;
      background-color: #FFC82B;
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgb(52 152 219 / 20%);
      /*    box-shadow: 3px 3px #4ECCF1;*/
    }

    .button:hover {
      background-color:
        #FFBD00;
      color: #fff;
    }

    .button:active {
      background-color: #FFD355;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }

    .brand {
      /* text-shadow: 0 0 5px #000; */
      color: #666;
    }

    .menu-item a {
      color: #FFBD00;
      text-decoration: none;
    }

    .menu-item {
      color: #FFBD00;
    }

    .btn-beranda {
      text-decoration: none;
    }

    .services-style-one {
      background-color: #FFDE80;
      padding-bottom: 120px;
    }

    .wa-btn {
      width: 48px;
      height: 50px;
      position: fixed;
      right: 18px;
      bottom: 70px;
      background-color: green;
      z-index: 9;
      border-radius: 50%;
      padding: 17px 16px;
    }

    .wa-btn i {
      color: white;
    }
  </style>

</head>

<body>
  @foreach ($about as $abt)
  <div class="wa-btn">
    <a target="_blank" href="Https://wa.me/62{{ $abt->wa }}">
      <i class="bi bi-whatsapp"></i>
    </a>
  </div>
  @endforeach
  <div class="preloader" style="display: none;"></div><!-- /.preloader -->
  <div class="page-wrapper">
    <header class="site-header header-one">
      <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky stricky-fixed slideInDown animated">
        <div class="container clearfix">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="logo-box clearfix ">

            <a class=" navbar-brand" href="#">
              <img src="assets/img/logo_brand.png" alt="Awesome Image" width="100" height="80"
                class="d-inline-block align-text-middle">
              <span style="font-size:25px;" class=" fw-bolder brand">BANYUMAS KOTA LAMA</span>
            </a>


          </div><!-- /.logo-box -->
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="main-navigation">
            <ul class="one-page-scroll-menu navigation-box">
              <li class="scrollToLink current">
              </li>

            </ul>
          </div><!-- /.navbar-collapse -->
          <div class="right-side-box">

          </div><!-- /.right-side-box -->
        </div>
        <!-- /.container -->
      </nav>
    </header><!-- /.site-header -->

    <section style="min-height: 80vh;" class="banner-style-one" id="banner">
      <span class="bubble-1"></span>
      <span class="bubble-2"></span>
      <span class="bubble-3"></span>
      <span class="bubble-4"></span>
      <span class="bubble-5"></span>
      <span class="bubble-6"></span>

      <div class="container">
        <div class="row">
          <div class="col-12 col-md-5">
            <center>

              <div class="content-block">
                <h3>Website<br> Banyumas<br>Kota Lama </h3>

                <p>Portal Resmi Banyumas Kota Lama</p>
                <p><a href="#service" class="button btn-beranda">Menu</a>
                </p>
                <br><br>
              </div><!-- /.content-block -->
            </center>
          </div><!-- /.col-lg-6 -->
          <div class="col-12 col-md-7">
            <img src="assets/img/landscape_kota_lama_banyumas.png" alt="Awesome Image" width="100%">
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.banner-style-one -->

    <section class="services-style-one" id="service" style="margin-bottom: 20px">

      <div class="container">

        <div class="row accordion d-flex justify-content-around" id="accordionGroup">

          <!-- menu1 -->

          <div class="col-lg-4 col-md-6 col-sm-12 mb-5 collapsed " data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="false" aria-controls="collapseOne" >
              <div class="single-service-one accrodion-title">
                <div class="hover-block"></div><!-- /.hover-block -->
                <h3>
                  <center><img src="assets/img/kota.png" style="height: 110px; width: 110px" class="main-logo"
                      width="" alt="Awesome Image"><br>
                    <!--  <i class="tripo-icon-list-menu"></i> -->About me</center>
                </h3>
              </div>
    <!-- /.single-service-one -->

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionGroup">
              <div class="card-body  rounded-lg card">
                <h2 style="font-family:Montserrat,arial,helvetica; color: black;"></h2>
                <li id="menu-item-127" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-127"><a
                    href="/about">Tentang Kota Lama</a></li>
              </div>
            </div>
          </div>
          <!-- /.col-lg-4 -->

          <!-- menu 2 -->
          <div class="col-lg-4 col-md-6 col-sm-12 mb-5 collapsed" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="false" aria-controls="collapseTwo" >

              <div class="single-service-one accrodion-title">
                <div class="hover-block"></div><!-- /.hover-block -->
                <h3>
                  <center><img src="assets/img/wisata.png" style="height: 110px; width: 110px" class="main-logo"
                      width="" alt="Awesome Image"><br>
                    <!--  <i class="tripo-icon-list-menu"></i> -->Paket-paket Wisata</center>
                </h3>
              </div><!-- /.single-service-one -->
            
             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionGroup">
              <div class="card-body  rounded-lg card">
                <h2 style="font-family:Montserrat,arial,helvetica; color: black;"></h2>
                @foreach ($packages->take(4) as $package)
                <li id="menu-item-1830" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1830">
                  <a href="/paket-wisata#{{ $package->title }}">{{ $package->title }}</a>
                </li>    
                @endforeach
               
                  <a style="text-decoration: none; color:sandybrown;" href="/paket-wisata">selengkapnya</a>
                
              </div>
            </div>
          </div><!-- /.col-lg-4 -->


          <!-- menu 3 -->
          <div class="col-lg-4 col-md-6 col-sm-12 mb-5 collapsed" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="false" aria-controls="collapseTwo" >
            
              <div class="single-service-one accrodion-title">
                <div class="hover-block"></div><!-- /.hover-block -->
                <h3>
                  <center><img src="assets/img/kuliner.png" style="height: 110px; width: 110px" class="main-logo"
                      width="" alt="Awesome Image"><br>
                    <!--  <i class="tripo-icon-list-menu"></i> -->Kuliner</center>
                </h3>
              </div>
            
            <!-- /.single-service-one -->
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionGroup">
              <div class="card-body  rounded-lg card">
                <h2 style="font-family:Montserrat,arial,helvetica; color: black;"></h2>
                @foreach ($kuliners->take(-4) as $kuliner)
                 <li id="menu-item-1863" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1863">
                  <a href="/kuliner#{{ $kuliner->title }}">{{ $kuliner->title }}</a>
                </li>   
                @endforeach
                <a style="text-decoration: none; color:sandybrown;" href="/kuliner">selengkapnya</a>
              </div>
            </div>
          </div><!-- /.col-lg-4 -->


          <!-- menu 4 -->
          <div class="col-lg-4 col-md-6 col-sm-12 mb-5 collapsed" data-toggle="collapse" data-target="#collapseFour"
            aria-expanded="false" aria-controls="collapseTwo" style="padding-top: 20px; ">
            
              <div class="single-service-one accrodion-title">
                <div class="hover-block"></div><!-- /.hover-block -->
                <h3>
                  <center><img src="assets/img/homestay.png" style="height: 110px; width: 110px" class="main-logo"
                      width="" alt="Awesome Image"><br>
                    <!--  <i class="tripo-icon-list-menu"></i> -->Homestay</center>
                </h3>
              </div>
            
            <!-- /.single-service-one -->
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionGroup">
              <div class="card-body  rounded-lg card">
                <h2 style="font-family:Montserrat,arial,helvetica; color: black;"></h2>
                @foreach ($homestays->take(-4) as $homestay)
                <li id="menu-item-1840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1840">
                  <a href="/homestay#{{ $homestay->title }}">{{ $homestay->title }}</a>
                </li>    
                @endforeach
                <a style="text-decoration: none; color:sandybrown;" href="/homestay">selengkapnya</a>
              </div>
            </div>
          </div><!-- /.col-lg-4 -->




          <!-- menu 5 -->
          <div class="col-lg-4 col-md-6 col-sm-12" data-toggle="collapse" data-target="#collapseFive"
            aria-expanded="true" aria-controls="collapseTwo" style="padding-top: 20px " >
            
              <div class="single-service-one accrodion-title">
                <div class="hover-block"></div><!-- /.hover-block -->
                <h3>
                  <center><img src="assets/img/souvenir.png" style="height: 110px; width: 110px" class="main-logo"
                      width="" alt="Awesome Image"><br>
                    <!--  <i class="tripo-icon-list-menu"></i> -->Souvenir</center>
                </h3>
              </div>
            
            <!-- /.single-service-one -->
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionGroup">
              <div class="card-body  rounded-lg card">
                <h2 style="font-family:Montserrat,arial,helvetica; color: black;"></h2>
                @foreach ($souvenirs->take(-4) as $souvenir)
                <li id="menu-item-1865" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1865">
                  <a href="/souvenir#{{ $souvenir->title }}">{{ $souvenir->title }}</a>
                </li>    
                @endforeach
                <a style="text-decoration: none; color:sandybrown;" href="/souvenir">selengkapnya</a>
              </div>
            </div>
          </div><!-- /.col-lg-4 -->

          <!-- menu 6 -->
          <div class="col-lg-4 col-md-6 col-sm-12" data-toggle="collapse" data-target="#collapseSix"
            aria-expanded="true" aria-controls="collapseSix" style="padding-top: 20px " >
            <div class="single-service-one accrodion-title">
              <div class="hover-block"></div><!-- /.hover-block -->
              <h3>
                <center><img src="assets/img/gallery.png" style="height: 110px; width: 110px" class="main-logo"
                    width="" alt="Awesome Image"><br>
                  <!--  <i class="tripo-icon-list-menu"></i> -->Gallery</center>
              </h3>
            </div><!-- /.single-service-one -->
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionGroup">
              <div class="card-body  rounded-lg card">
                <h2 style="font-family:Montserrat,arial,helvetica; color: black;"></h2>
                <li id="menu-item-127" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-127"><a
                  href="/gallery">Lihat Gallery</a></li>
                
              </div>
            </div>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.services-style-one -->
    <img src="assets/img/landscape_kota_lama_banyumas_2.png" width="100%">

    <hr class="rgba-white-light" style="margin: 0 15%;">
    <div class=" d-flex text-center justify-content-center mb-md-0 mb-4 mt-3">
    </div>

  </div>

  <div class="bottom-footer text-center">
    <div class="container">
      <p>© copyright 2023 <a href="#" style="color: blue">Banyumas Kota lama</a></p>
    </div>
  </div>
  <!-- /.page-wrapper -->
  <a href="#" data-target="html" class="scroll-to-target scroll-to-top" style="display: block; background-color: gold; color: white; text-decoration: none;">
    <!-- <i>
      <img src="" style="height: 30%; width: 30%" class="main-logo" width="" alt="Awesome Image">
    </i> -->
    UP
  </a>
  <!-- /.scroll-to-top -->
  <script src="assets/jquery.js"></script>
  <script src="assets/bootstrap.bundle.min.js"></script>
  <script src="assets/owl.carousel.min.js"></script>
  <script src="assets/jquery.bxslider.min.js"></script>
  <script src="assets/waypoints.min.js"></script>
  <script src="assets/jquery.easing.min.js"></script>
  <script src="assets/wow.js"></script>
  <script src="assets/jquery.validate.min.js"></script>
  <script src="assets/jquery.counterup.min.js"></script>
  <script src="assets/theme.js"></script>





</body>

</html>