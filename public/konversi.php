

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TokoKu &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    

    <div class="site-navbar bg-white py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">TokoKu</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="has-children active">
                  <a href="index.html">Home</a>
                  <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                    <li class="has-children">
                      <a href="#">Sub Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                
                <li><a href="shop.html">Shop</a></li>
                <li><a href="index.html">New Arrivals</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="about.html">Profile</a></li>
                <li><a href="konversi.php">Conversion</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <a href="cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- php -->

    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Program Konversi</h2>
                <h3 class="section-subheading text-muted">Silakan Masukan 4 Digit Angka</h3>
            </div>
            <form id="contactForm" method="post" action="" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group" class="text-center">
                            <!-- Name input-->
                            <input class="form-control" required id="name" type="text" name="agka"
                                placeholder="Masukkan 4 Digit Angka *" />
                        </div>
                    </div>
                    <!-- PHP -->
                    <?php
                    error_reporting(E_ERROR | E_WARNING | E_PARSE);
                    function terbilang($n){
                        $huruf = [""," satu "," dua "," tiga "," empat "," lima "," enam "," tujuh "," delapan "," sembilan "," sepuluh "," sebelas "];
                        if ($n <12) {return $huruf[$n];}
                            else if ($n < 20) {
                                return terbilang($n-10)."belas";
                            }
                            else if ($n < 100) {
                                return terbilang($n/10)."puluh".terbilang($n%10);
                            }
                            else if ($n < 200) {
                                return " seratus".terbilang($n-100)." ";
                            }
                            else if ($n < 1000) {
                                return terbilang($n / 100) . " ratus" . terbilang($n % 100);
                            }
                            else if ($n < 2000) {
                                return " seribu" . terbilang($n - 1000);
                            }
                        }
                        if (isset($_POST['conv'])){
                            echo '
                            <div class="col-md-6">
                                <div class="form-group form-group-textarea mb-md-0">
                                    <!-- Message input-->
                                    <textarea class="form-control" id="message" placeholder="Pesan Anda *">('.$_POST['agka'].')'.terbilang($_POST['agka']).'</textarea>
                                    </div>
                                </div>
                            </div>

                                ';
                        }
                ?>
                    <!-- /PHP -->

                    <!-- Submit Button-->
                    <div class="text-center">
                        <input type="submit" name="conv"/>
                    </div>

            </form>
        </div>
    </section>
    
    <!-- end php -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>