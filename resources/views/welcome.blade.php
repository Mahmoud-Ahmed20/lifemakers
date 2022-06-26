@extends('layouts.design.master')
@section('contant')


  <!-- start home main slider -->
  <div class="swiper-container home-main-slider">
    <div class="swiper-wrapper">
     @foreach ($images as $image )
     <div class="swiper-slide">
        <div class="slider-img">
          <a href="contact.html">
          <img src="{{ asset('Slider/'.$image->img) }}" alt="img">
          </a>
        </div>
    </div>
     @endforeach

    </div>


    <div class="mfa-swiper-buttons">
      <div class="swiper-button-prev home-main-slider-prev">
        <span class="feather icon-arrow-right"></span>
      </div>
      <div class="swiper-button-next home-main-slider-next">
        <span class="feather icon-arrow-left"></span>
      </div>
    </div>

    <div class="swiper-pagination home-main-slider-pagination"></div>
  </div>
  <!-- end home main slider -->
  <section class="about mega-section" id="about-2">
    <div class="container-fluid">
      <!-- Start first about div-->
      <div class=" content-block  ">
        <div class="row">
          <div class="col-12 col-md-6 d-flex align-items-center about-col pad-end order-1 order-lg-0  wow fadeInUp" data-wow-delay="0.2s">
            <div class=" text-area ">
              <div class="section-heading side-heading  light-title">
                @foreach ( $about as $about )
                <h2 class="section-title ">  من نحن؟

                  <span class="featured-text"></span><span class="title-design-element "></span></h2>
              </div>

              <p class=" init-text">
                {{ $about->title }}
                </p>
                <div class="cta-area wow fadeInUp" data-wow-delay=".8s"><a class=" btn-solid " href="about-us-1.html">اعرف المزيد</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center order-0 order-lg-1  wow fadeInUp" data-wow-delay="0.4s">
              <div class="img-area  " data-tilt="" data-tilt-glare="" data-tilt-max-glare="0.5" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
              <div class="image">
                  <img class="img-fluid about-img" src="{{ asset('About/'.$about->img) }}" alt="Our vision">
                </div>
              @endforeach
            <div class="js-tilt-glare" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none;"><div class="js-tilt-glare-inner" style="position: absolute; top: 50%; left: 50%; pointer-events: none; background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%); width: 1080px; height: 1080px; transform: rotate(180deg) translate(-50%, -50%); transform-origin: 0% 0%; opacity: 0;"></div></div></div>
          </div>
        </div>
      </div>
      <!--End first about div-->
    </div>
  </section>
  <div class="stats stats-counter shifted-down is-dark ">
    <div class="container">
      <div class="stats-inner">
        <div class="overlay-photo-image-bg"> </div>
        <div class="overlay-color"></div>
        <div class="row no-gutters">
          <!--Info One-->
          <div class="col-lg-4 col-lg-3 stat-box ">
            <div class="stat-box-inner wow fadeInUp " data-wow-delay=".2s"><img src="{{ asset(('design/assets/Images/h10-150x150.png')) }}"  alt="">
            </div>
          </div>
          <!--Info Two-->
          <div class="col-lg-4 col-lg-3 stat-box ">
            <div class="stat-box-inner wow fadeInUp " data-wow-delay=".2s">
              <img src="{{ asset('design/assets/Images/h11-150x150.png') }}" alt="">
            </div>
          </div>
          <!--Info Three-->
          <div class="col-lg-4 col-lg-3 stat-box ">
            <div class="stat-box-inner wow fadeInUp " data-wow-delay=".2s">
              <img src="{{ asset('design/assets/Images/h12-150x150.png') }}" alt="">
            </div>
          </div>
          <!--Info Four-->
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid donate-section-main text-center">

    <div class="section-heading center-heading">
      <h2 class="section-title  wow fadeInUp" data-wow-delay=".2s"><span class='hollow-text'>تبرعك </span> ينقذ حياة اسرة<span class="title-design-element "></span></h2>
      <div class="line line-on-center wow fadeIn" data-wow-delay=".7s"></div>
    </div>

    <div class="col-xs-12 remove-padding">
        <img src="{{ asset('design/assets/Images/home_ar.png') }}">
        <div class="col-md-12 col-sm-12 col-xs-12 carl">
            <a href="{{ route('donate') }}">تبرع الآن</a>
        </div>
    </div>
</div>

<div class="gallery-page">
  <!-- start gallery section -->
  <div class="gallery-section">
      <div class="section-heading center-heading">
          <h2 class="section-title  wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><span class="hollow-text">معرض صور
            </span>صناع الحياة<span class="title-design-element "></span></h2>
          <div class="line line-on-center wow fadeIn" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeIn;"></div>
        </div>
    <div class="gallery-layout">
      <div class="mfa-gallery">
        <a href="{{ asset('design/assets/Images/1.jpeg') }}">
          <div class="img-div lazy-div">
            <img
              class="lazy"
              data-src="{{ asset('design/assets/Images/1.jpeg') }}"
            />
            <div class="next-lazy-img"></div>
          </div>
        </a>
        <a href="{{ asset('design/assets/Images/2.jpeg') }}">
          <div class="img-div lazy-div">
            <img
              class="lazy"
              data-src="{{ asset('design/assets/Images/2.jpeg') }}"
            />
            <div class="next-lazy-img"></div>
          </div>
        </a>
        <a href="{{ asset('design/assets/Images/3.jpeg') }}">
          <div class="img-div lazy-div">
            <img
              class="lazy"
              data-src="{{ asset('design/assets/Images/3.jpeg') }}"
            />
            <div class="next-lazy-img"></div>
          </div>
        </a>
        <a href="{{ asset('design/assets/Images/4.jpeg') }}">
          <div class="img-div lazy-div">
            <img
              class="lazy"
              data-src="{{ asset('design/assets/Images/4.jpeg') }}"
            />
            <div class="next-lazy-img"></div>
          </div>
        </a>
        <a href="{{ asset('design/assets/Images/5.jpeg') }}">
          <div class="img-div lazy-div">
            <img
              class="lazy"
              data-src="{{ asset('design/assets/Images/5.jpeg') }}"
            />
            <div class="next-lazy-img"></div>
          </div>
        </a>
        <a href="{{ asset('design/assets/Images/6.jpeg') }}">
          <div class="img-div lazy-div">
            <img
              class="lazy"
              data-src="{{ asset('design/assets/Images/6.jpeg') }}"
            />
            <div class="next-lazy-img"></div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <!-- end gallery section -->
</div>
  <section class=" services-bg-img flip-cards  mega-section text-center " id="services">
    <div class="overlay-photo-image-bg"></div>
    <div class="container">
      <div class="section-heading center-heading">
        <h2 class="section-title  wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><span class="hollow-text">انجازات
          </span>صناع الحياة<span class="title-design-element "></span></h2>
        <div class="line line-on-center wow fadeIn" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeIn;"></div>
      </div>
    </div>
    <div class="container">
      <div class="row   services-row">
        @foreach ( $Achievements as  $Achievement)
        <div class="col-12 col-md-9  col-lg-4 mx-auto service-card">

            <div class="flip-card flip-x wow fadeInUp" data-wow-offset="0" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="front-face">
              <div class="front-face-inner">
                <div class="icon-wrapper ">
                </div>
                <div class="title-wrapper ">
                </div>
                <div class="desc-wrapper">
                    <ul class="desc">
                      <li style="direction: rtl;"><span style="font-size: 10pt;"><strong>{{ $Achievement->title }}</strong></span></li>

                      </ul>
                  </div>
                </div>
              </div>
              <div class="back-face">
                <div class="bg-img-wrapper"><img class="bg-img" src="{{ asset('Achievement/'.$Achievement->img) }}" alt="bg-img"></div>
                <div class="overlay-color"></div>
                <div class="back-face-inner">
                  <div class="title-wrapper">
                  </div>
                  <div class="desc-wrapper">
                    <ul class="desc">
                      <li style="direction: rtl;"><span style="font-size: 10pt;"><strong>{{ $Achievement->title }}</strong></span></li>

                      </ul>
                  </div>
                  <div class="btn-wrapper"><a class="btn-solid  " href="#0">المزيد<i class="fas fa-arrow-right icon ">
                      </i></a></div>
                </div>
              </div>

          </div>

        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- Start  our-clients Section-->
  <section class="our-clients   elf-section" id="our-clients">
    <div class="container-fluid">
      <div class="section-heading center-heading">
        <h2 class="section-title  wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><span class="hollow-text">شركاء
          </span>النجاح<span class="title-design-element "></span></h2>
        <div class="line line-on-center wow fadeIn" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeIn;"></div>
      </div>
      <div class="col-lg-12 team_slider owl-carousel owl-theme">
       @foreach ( $successPartners as $successPartner)
       <div class="item team_member">
        <a href="latestwork.html"><img class="img-fluid thumb"
                src="{{ asset('successPartners/'.$successPartner->img) }}"
                alt="بالم هيلز"></a>
       </div>
       @endforeach
    </div>
    </div>
  </section>
  <!-- End  our-clients Section-->










@stop
