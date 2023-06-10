<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ url ('user/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css/ticker-style.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css/slicknav.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css/themify-icon.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css/slick.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css/style.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css/footer.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css/mobile.css') }}">
        <link rel="stylesheet" href="{{ url ('user/lib/animate/animate.min.css') }}"/>
        <style>
            .main-menu {
              z-index: 2;
            }

            .yellow-rec {
            background-color: #FFFF00;
            height: 5px;
            width: 100%;
            }
        </style>
   </head>

   <body>

    <header>
        <div class="header-area header-color">
            <div class="main-header ">
               <div class="border-top header-sticky header-line-height header-color">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-4 custom-navbar-size align-self-center">
                                <a href="{{ url('/') }}"><img src="{{ url ('user/img/logo.png') }}" height="40" alt=""></a>
                            </div>
                            <div class="col-md-8">
                                <div class="main-menu d-none d-md-block">
                                    <nav class="d-flex flex-row-reverse">            
                                        <ul id="navigation">    
                                            <li class="li-mb"><a class="submenu-text-color" href="{{ url ('/') }}">Beranda</a></li>
                                            <li class="li-mb"><a class="submenu-text-color " href="#">Profil</a>
                                                <ul class="submenu submenu-line-height">
                                                    <li><a href="{{ url('/tentang') }}">Tentang</a></li>
                                                    <li><a href="{{ url('/dosen') }}">Dosen & Staff</a></li> 
                                                </ul>
                                            </li>
                                            <li class="li-mb"><a class="submenu-text-color" href="#">Akademik</a>
                                                <ul class="submenu submenu-line-height">
                                                    <li><a href="{{ url('/kalender-akademik') }}">Kalender Akademik</a></li>
                                                    <li><a href="{{ url('/kurikulum') }}">Kurikulum</a></li>
                                                    <li><a href="{{ url('/tugas-akhir') }}">Tugas Akhir</a></li>
                                                    <li><a href="{{ url('/fasilitas') }}">Fasilitas</a></li>
                                                    <li><a href="{{ url('/pusat-layanan-terpadu') }}">Pusat Layanan Terpadu</a></li>
                                                </ul>
                                            </li>
                                            <li class="li-mb"><a class="submenu-text-color" href="#">Mahasiswa</a>
                                                <ul class="submenu submenu-line-height">
                                                    <li><a href="{{ url('/prestasi-mahasiswa') }}">Prestasi Mahasiswa</a></li>
                                                    <li><a href="{{ url('/emailkomp') }}">Emailkomp</a></li>
                                                </ul>
                                            </li>
                                            <li class="li-mb"><a class="submenu-text-color" href="#">Calon Mahasiswa</a>
                                                <ul class="submenu submenu-line-height">
                                                    <li><a href="https://spmb.uns.ac.id/">Pendaftaran</a></li>
                                                    <li><a href="blog.html">Prospek Karir</a></li>
                                                </ul>
                                            </li>
                                            <li class="li-mb"><a class="submenu-text-color" href="#">Penelitian</a>
                                                <ul class="submenu submenu-line-height">
                                                    <li><a href="{{ url('/penelitian-mahasiswa') }}">Penelitian Mahasiswa</a></li>
                                                    <li><a href="{{ url('/penelitian-dosen') }}">Penelitian Dosen</a></li>
                                                    <li><a href="{{ url('/penelitian-jurnal') }}">Jurnal Dosen dan<br/>Mahasiswa</a></a></li>
                                                    <li><a href="{{ url('/penelitian-kerjasama') }}">Pengabdian</a></li>
                                                    <li><a href="{{ url('/penelitian-pengabdian') }}">Kerjasama</a></li>
                                                </ul>
                                            </li>
                                            <li class="li-mb"><a class="submenu-text-color" href="{{ url('/penelitian-dosen-news') }}">Contact</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none mt-25"></div>
                            </div>
                        </div>
                    </div>
    <div class="yellow-rec"></div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')
    
    <div class="yellow-rec"></div>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding fix custom-footer-padding footer-color">
            <div class="container">
                <div class="row d-flex justify-content-between ">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            
                            <div class="single-footer-caption">
                                
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ url ('user/img/logo/logo2_footer.jpg') }}" alt=""></a>
                                </div>
                                <div class="footer-tittle ">
                                    <div class="footer-pera ">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1098677734217!2d110.83377821554613!3d-7.562998876789651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a17bfca3568f1%3A0x52872ee12cf2fa57!2sKampus%20UNS%20Mesen!5e0!3m2!1sen!2sid!4v1681055365020!5m2!1sen!2sid" class="img-fluid w-100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        <p class="footer-font">Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for sectetuer.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <p class="footer-font">Heaven fruitful doesn't over les idays appear creeping</p>
                                <!-- Form -->
                                <div class="footer-form" >
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                            class="email_icon newsletter-submit button-contactForm"><img src="{{ url ('user/img/logo/form-iocn.jpg') }}" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-60">
                            <div class="footer-tittle">
                                <h4>Instagram Feed</h4>
                                <p class="text-dark custom-easter-eggs">Copyright G.P.H. Inc License</p>
                            </div>
                            <div class="instagram-gellay">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer2-color">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </footer>
   
	<!-- JS here -->
	
    <script src="{{ url ('user/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ url ('user/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ url ('user/js/popper.min.js') }}"></script>
    <script src="{{ url ('user/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ url ('user/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ url ('user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url ('user/js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ url ('user/js/gijgo.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ url ('user/js/wow.min.js') }}"></script>
    <script src="{{ url ('user/js/animated.headline.js') }}"></script>
    <script src="{{ url ('user/js/jquery.magnific-popup.js') }}"></script>

    <!-- Breaking New Pluging -->
    <script src="{{ url ('user/js/jquery.ticker.js') }}"></script>
    <script src="{{ url ('user/js/site.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ url ('user/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ url ('user/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ url ('user/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ url ('user/js/contact.js') }}"></script>
    <script src="{{ url ('user/js/jquery.form.js') }}"></script>
    <script src="{{ url ('user/js/jquery.validate.min.js') }}"></script>
    <script src="{{ url ('user/js/mail-script.js') }}"></script>
    <script src="{{ url ('user/js/jquery.ajaxchimp.min.js') }}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{ url ('user/js/plugins.js') }}"></script>
    <script src="{{ url ('user/js/main.js') }}"></script>
        
    </body>
</html>