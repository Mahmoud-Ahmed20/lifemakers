<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Life Makers</title>

    <!-- fav icon -->
    <link rel="icon" href="{{ asset('design/assets/Images/fav-icon/fav-icon.png') }}">

    <!-- bootstarp -->
    <link rel="stylesheet" href="{{ asset('design/css/vendors/bootstrap.min.css') }}">

    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('design/css/vendors/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('design/css/featherIcons.css') }}">
    <link rel="stylesheet" href="{{ asset('design/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('design/css/thouchpin.css') }}">

    <link rel="stylesheet" href="{{ asset('design/css/owl.carousel.min.css') }}" type="text/css">
    <!-- animate.css file -->
    <link rel="stylesheet" href="{{ asset('design/css/linearicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('desgin/css/vendors/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('design/css/lightgallery.css') }}" />
    <!-- vegas -->

    <!-- Swiper -->
    <link rel="stylesheet" href="{{ asset('design/css/vendors/swiper.min.css') }}">

    <!-- fontAwesome -->
    <link rel="stylesheet" href="{{ asset('design/css/vendors/all.min.css') }}">

    <!-- Font Family -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800;900&amp;display=swap">

    <!-- main-LTR -->
    <link rel="stylesheet" href="{{ asset('design/css/index.css') }}">
</head>

<body class="   rounded-btns ">
    <!--Start Page Header-->
    <header class=" page-header light-header menu-on-end  header-basic" id="page-header">
        <div class="header-search-box">
          <div class="close-search"></div>
          <form class="nav-search search-form" role="search" method="get" action="#">
            <div class="search-wrapper">
              <label class="search-lbl">Search for:</label>
              <input class="search-input" type="search" placeholder="Search..." name="searchInput" autofocus="autofocus" />
              <button class="search-btn" type="submit"><i class="fas fa-search icon"></i></button>
            </div>
          </form>
        </div>
        <!--start navbar-->
        <div class="bar-top">
          <div class="container">
            <div class="bar-top-group">
              <div class="info-panel menu-wrapper">
                <div class="list-js info-list"><i class="fas fa-times close-icon"></i>
                  <div class="info-list-inner">
                    <div class="info info-panel-logo">
                      <div class="logo"><img class="logo-img light-logo" src="{{ asset('design/assets/Images/logo/logo-dark-colored.png') }}" alt="logo"></div>
                      <h3 class="info-title  ">Who We Are?</h3>
                      <div class="info-text">
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus praesentium consequuntur cumque labore modi voluptatum fugit animi tempore id perspiciatis!</p>
                      </div>
                    </div>
                    <h3 class="info-title">contact info</h3>
                    <div class="info">
                      <div class="info-icon"><i class="fas fa-map-marker-alt icon"></i></div>
                      <div class="info-text">
                        <p class="text"> 536 xyz st., abc, Alexandria, Egypt  </p>
                      </div>
                    </div>
                    <div class="info">
                      <div class="info-icon"><i class="fas fa-envelope icon"></i></div>
                      <div class="info-text"><a class="text info-link" href="mailto:example@example.com">example@example.com</a></div>
                    </div>
                    <div class="info">
                      <div class="info-icon">                 <i class="fas fa-phone icon"></i></div>
                      <div class="info-text"><a class="text info-link" href="tel:(800)123-0045-1254">(800) 123-0045-1254</a></div>
                    </div>
                  </div>
                  <div class="social-icons">
                    <h3 class="info-title">follow us</h3>
                    <div class="sc-wrapper dir-row sc-flat">
                      <ul class="sc-list">
                        <li class="sc-item " title="Facebook"><a class="sc-link" href="#0"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                        <li class="sc-item " title="youtube"><a class="sc-link" href="#0"><i class="fab fa-youtube sc-icon"></i></a></li>
                        <li class="sc-item " title="instagram"><a class="sc-link" href="#0"><i class="fab fa-instagram sc-icon"></i></a></li>
                        <li class="sc-item " title="twitter"><a class="sc-link" href="#0"><i class="fab fa-twitter sc-icon"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bar-bottom">
          <div class="container">
            <nav class="menu-navbar">
              <div class="header-logo"><a class="logo-link" href="#"><img class="logo-img light-logo"
                    src="{{ asset('design/assets/Images/logo/logo.png') }}" alt="logo" /><img class="logo-img  dark-logo"
                    src="{{ asset('design/assets/Images/logo/logo.png') }}" alt="logo" /></a></div>
              <div class="links menu-wrapper ">
                <ul class="list-js links-list">
                  <li class="menu-item has-sub-menu"><a class="menu-link   active" href="index.html">صناع الحياة   <i
                        class="fas fa-chevron-down down-Arrow-icon"> </i></a>

                    <ul class="sub-menu ">
                      <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link" href="about-us.html">من نحن</a>
                      </li>
                      <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link" href="contact-us.html"> انتشارنا</a>
                      </li>
                      <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link" href="donate.html">الجمعيات</a>
                      </li>
                      <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link" href="members.html">مجلس الامناء</a>
                      </li>
                      <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link" href="about-us.html">تاثيرنا</a>
                      </li>
                      <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link" href="awards.html">الأنجازات</a>
                      </li>
                      <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link" href="donaters.html">المتطوعين</a>
                      </li>
                      <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link" href="contacts.html">اتصل بنا</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item"><a class="menu-link  " href="awards.html">
                      جائزة دوق ادنبرة
                  </a></li>



                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="blogs.html">

                    الاخبار

                  </a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="our-partner.html">

                    شركاء النجاح

                  </a></li>
                  <li class="menu-item has-sub-menu"><a class="menu-link  " href="events.html">الحملات<i
                    class="fas fa-chevron-down down-Arrow-icon"> </i></a>
                <ul class="sub-menu ">
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  "
                      href="services-1.html">                  حملات التمويل
                    </a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  "
                      href="services-2.html">
                      تنفيذ المشروعات
                    </a></li>
                </ul>
              </li>
              <li class="menu-item has-sub-menu"><a class="menu-link  " href="donate.html">اتــــبــــرع<i
                class="fas fa-chevron-down down-Arrow-icon"> </i></a>
            <ul class="sub-menu ">
              <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  "
                  href="donate.html">التبرع عبر الموقع الإلكتروني</a></li>
              <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  "
                  href="donate.html">تبرع عبر البنوك</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  "
                    href="donate.html">وسائل ومنافذ أخرى للتبرع</a></li>
            </ul>
          </li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link" href="donate.html">التطوع</a>
                  </li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link" href="donate.html">أمانة رياض</a>
                  </li>

                </ul>
              </div>
              <div class="controls-box">
                <div class="control header-search-btn">
                  <svg class="search-icon" width="60" height="60" viewBox="0 0 60 60">
                    <g transform="translate(-1460 -905)">
                      <g transform="translate(1460 905)">
                        <g transform="translate(0 0)">
                          <path class="search-path" d="M59.634,56.1,42.2,38.669A23.8,23.8,0,1,0,38.669,42.2L56.1,59.634a1.25,1.25,0,0,0,1.768,0l1.767-1.767A1.25,1.25,0,0,0,59.634,56.1ZM23.75,42.5A18.75,18.75,0,1,1,42.5,23.75,18.771,18.771,0,0,1,23.75,42.5Z" transform="translate(0 0)"></path>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <div class="control  info-toggler"><span> </span><span> </span><span></span></div>
                <div class="control  menu-toggler"><span></span><span></span><span></span></div>
              </div>
            </nav>
          </div>
        </div>
        <!--End navbar-->
      </header>

    <!--End Page Header-->

      @yield('contant')

<!-- donation-page-section end -->
    <footer class="page-footer dark-color-footer" id="page-footer">
        <div class="overlay-photo-image-bg"></div>
        <div class="container">
            <div class="row footer-cols">
                <div class="col-md-3  pr-30  footer-col wow fadeInUp " data-wow-delay="0.3s"><img
                        class="img-fluid footer-logo" src="{{ asset('design/assets/Images/logo/logo.png') }}" alt="logo" />
                    <div class="footer-col-content-wrapper">
                        <p class="footer-text-about-us ">
                            مؤسسة صناع الحياة مصر (LMF) هي مؤسسة أهلية وطنية غير حكومية وغير هادفة للربح أسست عام 2011
                            ومسجلة مركزيا برقم قيد 839 لسنة 2018 وتعمل طبقا لقانون الجمعيات والمؤسسات الأهلية المصري.


                        </p>

                    </div>
                </div>
                <div class="col-md-3  footer-col wow fadeInUp pl-30 pr-30 b-l-r" data-wow-delay="0.5s">
                    <h2 class=" footer-col-title    ">روابط سريعة
                    </h2>
                    <div class="footer-col-content-wrapper">
                        <ul class="footer-menu ">
                            <li class="footer-menu-item"><i class="fas fa-arrow-right icon "></i><a
                                    class="footer-menu-link" href="#0">الرئيسية</a>
                            </li>
                            <li class="footer-menu-item"><i class="fas fa-arrow-right icon "></i><a
                                    class="footer-menu-link" href="#0">من نحن</a>
                            </li>
                            <li class="footer-menu-item"><i class="fas fa-arrow-right icon "></i><a
                                    class="footer-menu-link" href="#0">سابقة الاعمال</a>
                            </li>
                            <li class="footer-menu-item"><i class="fas fa-arrow-right icon "></i><a
                                    class="footer-menu-link" href="#0">الأخبار</a>
                            </li>
                            <li class="footer-menu-item"><i class="fas fa-arrow-right icon "></i><a
                                    class="footer-menu-link" href="#0">تواصل معنا</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-3 footer-col wow fadeInUp pl-30 pr-30 b-l-r" data-wow-delay=".7s">
                    <h2 class=" footer-col-title    ">تواصل معنا
                    </h2>
                    <div class="footer-col-content-wrapper">
                        <ul class="footer-menu">
                            <li class="footer-menu-item"><i class="fas fa-map-marker-alt icon"></i><a
                                    class="footer-menu-link" href="#0">3 Elmashtal St. Elsheshiny devision, Corniche
                                    Elnile, Maadi, Cairo, Egypt

                                </a>
                            </li>
                            <li class="footer-menu-item"><i class="fas fa-mobile-alt icon"></i><a
                                    class="footer-menu-link" href="tel:16563"> 16563</a>
                            </li>
                            <li class="footer-menu-item"><i class="fas fa-envelope icon"></i><a class="footer-menu-link"
                                    href="mailto:info@lifemakers.org">info@lifemakers.org</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3 pl-30 footer-col wow fadeInUp " data-wow-delay=".9s">
                    <h2 class=" footer-col-title    "> تابعونا عبر</h2>
                    <div class="news-f1">
                        <input type="text" placeholder="Email" class="fill form-control">
                        <button class="btn upcase ">Subscribe</button>
                        <br>

                        <div class="social-icons">
                            <div class="sc-wrapper dir-row sc-size-32">
                                <ul class="sc-list">
                                    <li class="sc-item " title="Facebook"><a class="sc-link" href="#0"><i
                                                class="fab fa-facebook-f sc-icon"></i></a></li>
                                    <li class="sc-item " title="youtube"><a class="sc-link" href="#0"><i
                                                class="fab fa-youtube sc-icon"></i></a></li>
                                    <li class="sc-item " title="instagram"><a class="sc-link" href="#0"><i
                                                class="fab fa-instagram sc-icon"></i></a></li>
                                    <li class="sc-item " title="twitter"><a class="sc-link" href="#0"><i
                                                class="fab fa-twitter sc-icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyrights ">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p class="creadits">


                            &copy; 2022
                            Created by:

                            <a class="link" href="#0">DigiFly</a>
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="terms-links"><a href="#0">Terms of Use </a>
                            | <a href="#0">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End  page-footer Section-->
    <a href="https://api.whatsapp.com/send?phone=20110000000&amp;text=" target="_blank" class="btn-whatsapp-pulse">
        <i class="fab fa-whatsapp sc-icon"></i>
    </a>
    <a href="https://instagram.com" target="_blank" class="btn-instagram-pulse2">
        <i class="fab fa-instagram sc-icon"></i>

    </a>
    <a href="https://www.facebook.com" target="_blank" class="btn-facebook-pulse">
        <i class="fab fa-facebook-f sc-icon"></i>

    </a>
    <a href="tel:2000000000" class="btn-phone-pulse">
        <i class="fa fa-phone"></i>
    </a>
    <!-- Start loading-screen Component-->
    <!-- <div class="loading-screen" id="loading-screen"><span class="bar top-bar"></span><span
      class="bar down-bar"></span><span class="progress-line"></span><span class="loading-counter"> </span></div> -->
    <!-- End loading-screen Component-->
    <!-- Start back-to-top Component-->
    <div class="back-to-top" id="back-to-top"><i class="fas fa-arrow-up icon"></i></div>
    <!-- End back-to-top Component-->

    <!--     JQuery     -->
    <script src="{{ asset('design/js/vendors/jquery-3.4.1.min.js') }}"></script>

    <!--     bootstrap     -->
    <script src="{{ asset('design/js/vendors/bootstrap.bundle.min.js') }}"></script>

    <!--     fancybox     -->
    <script src="{{ asset('design/js/vendors/jquery.fancybox.min.js') }}"></script>

    <!--     countTo     -->
    <script src="{{ asset('design/js/vendors/jquery.countTo.js') }}"></script>

    <!--     wow     -->
    <script src="{{ asset('design/js/vendors/wow.min.js') }}"></script>

    <!--     swiper     -->
    <script src="{{ asset('design/js/vendors/swiper.min.js') }}"></script>

    <!--     ajaxchimp     -->
    <script src="{{ asset('design/js/vendors/jquery.ajaxchimp.min.js') }}"></script>

    <!--     Vanilla-tilt     -->
    <script src="{{ asset('design/js/vendors/vanilla-tilt.min.js') }}"></script>

    <script src="{{ asset('design/js/vendors/lightgallery.js') }}"></script>

    <script src="{{ asset('design/js/vendors/lg-thumbnail.js') }}"></script>
    <script src="{{ asset('design/js/vendors/touchspin.js') }}"></script>

    <!--     isotope     -->
    <script src="{{ asset('design/js/vendors/isotope-min.js') }}"></script>
    <script src="{{ asset('design/js/vendors/owl.carousel.min.js') }}"></script>
    <!--     main     -->
    <script src="{{ asset('design/js/main.js') }}"></script>
</body>

</html>
