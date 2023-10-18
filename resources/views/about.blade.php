@extends('layouts.app')


@section('content')
<div class="hero-3__content">

      <div class="container">
        <div class="row g-4">
          <div class="col-md-12 col-xxl-12" style="margin: auto;">
            <h1 class="mb-4">Fostering a Culture of Innovation for Exceptional IT Solutions
            </h1>
            <p class=" xl-text mb-8">
                At Mutqana Innova, we strongly believe that innovation is at the heart of delivering unmatched IT solutions to our clients. Our culture is centered on experimentation and continuous improvement, which enables us to constantly push the limits of what's achievable and discover new opportunities for growth and success. By nurturing innovation within our company, we are able to stay ahead of the curve and provide cutting-edge solutions that meet the evolving needs of our clients. Our commitment to innovation is what sets us apart and enables us to deliver exceptional results that exceed expectations.
            </p>

            <div class="group group-sm-row align-items-start align-items-sm-center pt-3">
              <a href="/contact" class="bttn bttn-pill bttn-md bttn--base align-items-center fw-md gap-2">
                Know more about it!              </a>
            </div>
          </div>
          {{-- <div class="col-md-4 col-xxl-6">
           <img src="{{asset('website/assets/images/banners/About.png')}}" class="w-100" alt="">
          </div> --}}
        </div>
      </div>
    </div>

  <!-- Numbers  -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section__gap-bottom pb-lg-0 position-sticky top-0">
            <span class="d-block h5 lh-1 fw-semibold clr-base"> Top engineers, dedicated your success </span>
            <h2 class="mt-2 mb-4"> Numbers speak louder than words </h2>
            <p> Here are a few numbers that speak to Mutqana's power, ease, and speed. </p>
          </div>
        </div>
        <div class="col-lg-6">
            <div class="row g-4">
              <div class="col-sm-6">
                <div class="py-4 border-top">
                  <p class="mb-2 clr-heading md-text"> Followers: </p>
                  <h2 class="fw-normal clr-base"> 35k </h2>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="py-4 border-top">
                  <p class="mb-2 clr-heading md-text"> Clients served to date: </p>
                  <h2 class="fw-normal clr-base"> 70+ </h2>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="py-4 border-top">
                  <p class="mb-2 clr-heading md-text"> Years in business: </p>
                  <h2 class="fw-normal clr-base"> 8+ </h2>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="py-4 border-top">
                  <p class="mb-2 clr-heading md-text"> Product Launch: </p>
                  <h2 class="fw-normal clr-base"> 36 </h2>
                </div>
              </div>
            </div>
          </div>

        {{-- <div class="col-lg-6">
          <div class="row g-4">
          @foreach($numbers as $number)
            <div class="col-sm-6">
              <div class="py-4 border-top">
                <p class="mb-2 clr-heading md-text"> {{$number->title}}: </p>
                <h2 class="fw-normal clr-base"> {{$number->number}} </h2>
              </div>
            </div>
            @endforeach
          </div>
        </div> --}}
      </div>
    </div>
  </section>
 <!-- Service Section  -->
 <div class="section">
    <div class="section__gap-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-xxl-8">
            <span class="d-block h5 lh-1 fw-semibold clr-base text-center"> TAKE YOUR BUSINESS TO THE NEXT LEVEL

            </span>
            <h2 class="mt-5 mb-5 text-center"> Why DigiTalents prefer Mutqana? </h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row g-3 g-xxl-4 justify-content-center">
        <div class="col-md-6 col-lg-4">
          <div class="service-card service-card--1">
            <div class="icon-box icon-box--md circle  flex-shrink-0">
             <img src="{{asset('website/assets/images/banners/Inbox cleanup-pana.png')}}" alt="image">
            </div>
            <div class="flex-grow-1">
                <h5 class="mb-2">Web Development</h5>
                <p class="mb-5"> We can design and develop websites, web applications, and e-commerce platforms. This includes creating a custom design, developing the site's functionality, and ensuring that it is optimized for search engines.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="service-card service-card--1">
            <div class="icon-box icon-box--md circle flex-shrink-0">
                <img src="{{asset('website/assets/images/banners/Mobile testing-amico.png')}}" alt="image">
            </div>
            <div class="flex-grow-1">
                <h5 class="mb-2">Mobile App Development</h5>
                <p class="mb-5"> We  can create mobile applications for Android and iOS devices. This includes developing the application's functionality, designing the user interface, and ensuring that it is compatible with multiple devices.
              </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="service-card service-card--1">
            <div class="icon-box icon-box--md circle  flex-shrink-0">
                <img src="{{asset('website/assets/images/banners/agile method-bro.png')}}" alt="image">
            </div>
            <div class="flex-grow-1">
              <h5 class="mb-2">Cloud Computing Services</h5>
              <p class="mb-5">We can help clients migrate their systems to the cloud, develop cloud-based software applications, and provide ongoing cloud support and maintenance.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="service-card service-card--1">
              <div class="icon-box icon-box--md circle  flex-shrink-0">
                  <img src="{{asset('website/assets/images/banners/Cell phone-bro.png')}}" alt="image">
              </div>
              <div class="flex-grow-1">
                <h5 class="mb-2">Big Data Analytics</h5>
                <p class="mb-5"> We can assist clients in analyzing large volumes of data to gain insights that can be used to improve their business operations. This includes developing custom analytics software and providing data visualization services. </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="service-card service-card--1">
              <div class="icon-box icon-box--md circle  flex-shrink-0">
                  <img src="{{asset('website/assets/images/banners/Financial data-bro.png')}}" alt="image">
              </div>
              <div class="flex-grow-1">
                <h5 class="mb-2">Artificial Intelligence</h5>
                <p class="mb-5"> We can develop AI solutions that enable clients to automate their processes, analyze data, and gain insights. This includes developing custom AI software, integrating AI algorithms, and providing ongoing support and maintenance. </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="service-card service-card--1">
              <div class="icon-box icon-box--md circle  flex-shrink-0">
                  <img src="{{asset('website/assets/images/banners/Interior design-pana.png')}}" alt="image">
              </div>
              <div class="flex-grow-1">
                <h5 class="mb-2">DevOps Services</h5>
                <p class="mb-5"> Programming companies can provide DevOps services that enable clients to streamline their software development processes. This includes automating the build, testing, and deployment of software applications, and providing ongoing support and maintenance. </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="service-card service-card--1">
              <div class="icon-box icon-box--md circle  flex-shrink-0">
                  <img src="{{asset('website/assets/images/banners/Designer girl-rafiki.png')}}" alt="image">
              </div>
              <div class="flex-grow-1">
                <h5 class="mb-2">UI/UX Design</h5>
                <p class="mb-5"> We can provide UI/UX design services to help clients create an intuitive and user-friendly interface for their software applications. </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="service-card service-card--1">
              <div class="icon-box icon-box--md circle  flex-shrink-0">
                  <img src="{{asset('website/assets/images/banners/Artificial intelligence-amico.png')}}" alt="image">
              </div>
              <div class="flex-grow-1">
                <h5 class="mb-2">Agile Software Development</h5>
                <p class="mb-5"> We can provide Agile software development services to help clients develop software applications using the Agile methodology. This includes developing user stories, conducting sprints, and providing ongoing support and maintenance. </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="service-card service-card--1">
              <div class="icon-box icon-box--md circle  flex-shrink-0">
                  <img src="{{asset('website/assets/images/banners/Robot face-pana.png')}}" alt="image">
              </div>
              <div class="flex-grow-1">
                <h5 class="mb-2">Networking Services</h5>
                <p class="mb-5"> We provide the most responsive and functional IT solution to enterprises and businesses
                  all around the globe. </p>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="section__gap-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-xl-8">
            <div class="group group-row flex-wrap justify-content-center align-items-center">
              <a href="service-1.html" class="bttn bttn--base bttn-md bttn-pill fw-md flex-shrink-0"> More Service </a>
              <a href="/contact"
                class="bttn bttn--stroke-outline bttn-md bttn-pill fw-md flex-shrink-0 align-items-center">
                <span class="bttn__arrow"> Contact us Now </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service Section End -->
  <!-- Help Category -->

  <!-- Help Category End -->
  <!-- About Section  -->
  {{-- <div class="section">
    <div class="container">
      <div class="row justify-content-xxl-between">
        <div class="col-lg-6 col-xxl-5">
          <div class="section__gap-bottom pb-lg-0 position-sticky top-0">
            <span class="d-block h5 lh-1 fw-semibold clr-base"> We’re itechex </span>
            <h2 class="mt-2 mb-4"> {{$about_us->title}} </h2>
            <p class="mb-5"> {{$about_us->description}} </p>
            <p class="mb-8">  {{$about->title}}</p>
            <p>{{$about->text}}</p>
            <a href="/contact" class="bttn bttn--base bttn-md bttn-pill gap-2 fw-md flex-shrink-0"> Let’s work
              together <span class="material-symbols-rounded mat-icon size-16 fw-400 bttn__icon-cover"> arrow_forward
              </span>

            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <figure class="about-company-1__img">
           <img src="{{asset('website/assets/images/about-img-1.jpg')}}" alt="image" class="img-fluid">
            <figcaption class="about-company-1__img-wrapper">
              <span class="h2 clr-light m-0 d-block text-start"> 1000 </span>
              <span class="d-block clr-light text-start"> Over 1000 employees globally use our vision to reality
                services. </span>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- About Section End -->

  <!-- Numbers End -->

  {{-- <!-- Value Share  -- >
  <section class="section">
    <div class="section__gap-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-6">
            <span class="d-block h5 lh-1 fw-semibold clr-base"> The Values we Share </span>
            <h2 class="mt-2 mb-4"> The Values that drive everything we do </h2>
            <p class="t-short-para"> Strong values that bring great people together </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="value-slider-container">
            <div class="value-slider__step">
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper value-slider">
              <div class="swiper-wrapper">
                <!-- Slides --
                <div class="swiper-slide">
                  <div class="value-slider__slide section--sm section--bottom">
                    <div class="row g-4 justify-content-xl-between align-items-lg-center">
                      <div class="col-lg-6 col-xl-7">
                        <div class="section__gap-bottom pb-lg-0">
                         <img src="{{asset('website/assets/images/value-slide-1.jpg')}}" alt="image" class="value-slider__img">
                        </div>
                      </div>
                      <div class="col-lg-6 col-xl-4">
                        <h3 class="mb-5 clr-light"> People </h3>
                        <p class="clr-light"> They’re the greatest asset that The Software House is built on. We work
                          with them and for them, making sure they feel fulfilled, appreciated, and satisfied. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="value-slider__slide section--sm section--bottom">
                    <div class="row g-4 justify-content-xl-between align-items-lg-center">
                      <div class="col-lg-6 col-xl-7">
                        <div class="section__gap-bottom pb-lg-0">
                         <img src="{{asset('website/assets/images/value-slide-2.jpg')}}" alt="image" class="value-slider__img">
                        </div>
                      </div>
                      <div class="col-lg-6 col-xl-4">
                        <h3 class="mb-5 clr-light"> Openness </h3>
                        <p class="clr-light"> We welcome new ideas and challenges that await us. Keeping a broad
                          perspective on the future, we spot potential and real problems ahead of time, with which we
                          deal promptly. The openness to one another drives our client and colleague relations. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="value-slider__slide section--sm section--bottom">
                    <div class="row g-4 justify-content-xl-between align-items-lg-center">
                      <div class="col-lg-6 col-xl-7">
                        <div class="section__gap-bottom pb-lg-0">
                         <img src="{{asset('website/assets/images/value-slide-3.jpg')}}" alt="image" class="value-slider__img">
                        </div>
                      </div>
                      <div class="col-lg-6 col-xl-4">
                        <h3 class="mb-5 clr-light"> Fair play </h3>
                        <p class="clr-light"> We strive to make decisions that are fair to all sides. Our employees get
                          adequate praise for their efforts and compensation for their skills. Similarly, our clients
                          see prices that are adequate to our involvement and work quality. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="value-slider__slide section--sm section--bottom">
                    <div class="row g-4 justify-content-xl-between align-items-lg-center">
                      <div class="col-lg-6 col-xl-7">
                        <div class="section__gap-bottom pb-lg-0">
                         <img src="{{asset('website/assets/images/value-slide-4.jpg')}}" alt="image" class="value-slider__img">
                        </div>
                      </div>
                      <div class="col-lg-6 col-xl-4">
                        <h3 class="mb-5 clr-light"> Fulfilment </h3>
                        <p class="clr-light"> Being fulfilled by our work keeps us energized. We create first-class
                          software that’s fast, efficient, and ready to scale because we want us and our clients to be
                          proud of our work. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="value-slider__slide section--sm section--bottom">
                    <div class="row g-4 justify-content-xl-between align-items-lg-center">
                      <div class="col-lg-6 col-xl-7">
                        <div class="section__gap-bottom pb-lg-0">
                         <img src="{{asset('website/assets/images/value-slide-1.jpg')}}" alt="image" class="value-slider__img">
                        </div>
                      </div>
                      <div class="col-lg-6 col-xl-4">
                        <h3 class="mb-5 clr-light"> Responsibility </h3>
                        <p class="clr-light"> To ensure of our clients’ success, we bring in knowledge, technology
                          skills, and high engagement to each project. Our communication remains open for all partners
                          regardless of their continent, culture, or time zone. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="value-slider__slide section--sm section--bottom">
                    <div class="row g-4 justify-content-xl-between align-items-lg-center">
                      <div class="col-lg-6 col-xl-7">
                        <div class="section__gap-bottom pb-lg-0">
                         <img src="{{asset('website/assets/images/value-slide-2.jpg')}}" alt="image" class="value-slider__img">
                        </div>
                      </div>
                      <div class="col-lg-6 col-xl-4">
                        <h3 class="mb-5 clr-light"> Growth </h3>
                        <p class="clr-light"> We aim high, always learning, to understand every novelty from the world
                          of technology. We support our employees’ learning and practicing so that they can deliver
                          top-class solutions in ambitious projects. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="value-slider__control">
              <div class="value-slider__fraction"></div>
              <div class="value-slider__btn swiper-button-prev"></div>
              <div class="value-slider__btn swiper-button-next"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Value Share End --> --}}

  <!-- Team Member  -->
  <div class="section">
    <div class="section__gap-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-8 col-xl-7">
            <span class="d-block h5 lh-1 fw-semibold clr-base text-center"> We have Large No of Expert Team Member
            </span>
            <h2 class="mt-5 mb-5 text-center"> The Amazing Team Behind Our Company </h2>
            <p class="text-center mx-auto t-short-para"> Our team strives to assist our clients retain or acquire
              best-in-class positions in their respective sectors. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-md">
      <div class="row g-3 g-xl-4">
      @foreach($users as $user)
        <div class="col-sm-6 col-lg-3">
          <div class="team-member-1">
            <div class="team-member-1__img-container">
              <a href="leadership-page.html" class="team-member-1__img-link">
               <img src="{{$user->photo}}" alt="image" class="team-member-1__img">
              </a>
              <!-- <ul class="list list-xs">
                <li>
                  <a href="#" class="t-link social-icon social-icon--sm social-icon--neutral-200 social-icon--circle">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="t-link social-icon social-icon--sm social-icon--neutral-200 social-icon--circle">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="t-link social-icon social-icon--sm social-icon--neutral-200 social-icon--circle">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="t-link social-icon social-icon--sm social-icon--neutral-200 social-icon--circle">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul> -->
            </div>
            <div class="team-member-1__body">
              <h5 class="mb-1">
                <a href="#" class="t-link d-block text-center clr-heading :clr-base"> {{$user->name}}
                </a>
              </h5>
              <p class="text-center"> {{$user->job}} </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="section__gap-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-xl-8">
            <div class="group group-row flex-wrap justify-content-center align-items-center">
              <a href="/contact" class="bttn bttn--base bttn-md bttn-pill fw-md flex-shrink-0"> Join Us Now
              </a>
              <a href="leadership.html"
                class="bttn bttn--stroke-outline bttn-md bttn-pill fw-md flex-shrink-0 align-items-center">
                <span class="bttn__arrow"> View All Team </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team Member End -->
  <!-- Feedback Section  -->
  <div class="section--sm section--top feedback-section-2">
    <div class="section__gap-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <h2 class="mt-5 mb-5 text-center clr-light"> Check What Our Clients Feedback On Our AI & Big Data Services
            </h2>
            <p class="text-center mx-auto max-text-60 clr-light"> What follows are some of the comments made by our
              clients.Don't take it on faith that we said it. Check out what some of our previous customers had to say.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row g-4 justify-content-center">
        <div class="col-12">
          <div class="feedback-slider-3-container">
            <div class="swiper feedback-slider-3">
              <div class="swiper-wrapper">
              @foreach($testimonies as  $testimony)
                <div class="swiper-slide">
                  <div class="feedback-card-1">
                    <ul class="list list-row list-xxs align-items-center lh-1">
                      <li>
                        <span class="material-symbols-outlined mat-icon solid text-warning"> star </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid text-warning"> star </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid text-warning"> star </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid text-warning"> star </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid text-warning"> star </span>
                      </li>
                    </ul>
                    <p>
                    {{$testimony->content}}
                    </p>
                    <hr class="hr">
                    <div class="group group-md group-row align-items-center">
                      <div class="user user--xmd user-outline-base flex-shrink-0 rounded-circle">
                        <span class="user__img rounded-circle">
                         <img src="{{$testimony->photo}}" alt="image" class="user__img-is">
                        </span>
                      </div>
                      <div class="flex-grow-1">
                        <h5 class="mb-1">{{$testimony->name}}</h5>
                        <p class="sm-text">{{$testimony->job}} </p>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="feedback-slider-1__btn swiper-button-prev"></div>
            <div class="feedback-slider-1__btn swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Feedback Section End -->
{{--
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1 title="عن الشركة">عن الشركة</h1>
            <ul>
                <li><a href="{{route('home')}}" title="الرئيسية">الرئيسية</a></li>

                <li class="active" title="عن الشركة">عن الشركة</li>

            </ul>
        </div>
    </div>
    <div class="shape shape-1">
        <img src="{{asset('website/assets/images/page-title-shape-1.png')}}" alt="عن الشركة">
    </div>
    <div class="shape shape-2">
        <img src="{{asset('website/assets/images/page-title-shape-2.png')}}" alt="عن الشركة">
    </div>
</div>

    <section class="choose-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="choose-img">
                        <img src="{{$about_us->phone}}" alt="Images">
                        <div class="your-of">
                            <h1>30</h1>
                            <h3>{{$about_us->title}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-accordion">
                        <h2>{{$about_us->description}}</h2>
                        <ul class="accordion">
                            @foreach($about_us->icons as $about)
                            <li class="accordion-item">
                                <a class="accordion-title @if ($loop->first) active @endif" href="javascript:void(0)">
                                    <span class="flaticon-contract"></span>
                                    {{$about->title}}
                                    <i class="ri-add-fill"></i>
                                </a>
                                <div class="accordion-content @if ($loop->first) show @endif">
                                    <p>{{$about->text}}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter-area bg-color pt-100 pb-70" dir="ltr">
        <div class="container">
            <div class="counter-bg">
                <div class="row">
                    @foreach($numbers as $number)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter">
                            <i class="flaticon-new-year"></i>
                            <div class="count-title">
                                <h2>
                                    <span class="odometer" data-count="{{$number->number}}">00</span>
                                </h2>
                                <h4>{{$number->title}}</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="team-area bg-color ptb-100" dir="ltr">
        <div class="container">
            <div class="section-title">
                <span>المهنيين لدينا</span>
                <h2>تعرف على فريقنا المتخصص</h2>
            </div>
            <div class="team-sidler owl-carousel owl-theme">
                @foreach($users as $user)
                <div class="single-team-member">
                    <img src="{{$user->photo}}" alt="Image">
                    <div class="team-content">
                        <h3>{{$user->name}}</h3>
                        <span>{{$user->job}}</span>
                        <div class="team-social">
                            <a href="javascript:void(0);" class="control"><i class="ri-share-line"></i></a>
                            <ul>
                                <li><a href="https://www.facebook.com/{{$user->facebook}}" rel="nofollow" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="https://www.instagram.com/{{$user->instagram}}" rel="nofollow" target="_blank"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="https://twitter.com/{{$user->twitter}}" rel="nofollow" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                                <li><a href="https://linkedin.com/{{$user->linkedin}}" rel="nofollow" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="testimonials-area-style-two ptb-100" dir="ltr" style="text-align: right">
        <div class="container">
            <div class="section-title">
                <span>الشهادات - التوصيات</span>
                <h2>ماذا يقول الناس عنا</h2>
            </div>
            <div class="testimonials-slider-two owl-carousel owl-theme">
                @foreach($testimonies as  $testimony)
                <div class="single-testimonials-box">
                    <div class="testimonials-img" dir="rtl">
                        <img src="{{$testimony->photo}}" alt="Image">
                        <div class="testimonials-mane">
                            <h3>{{$testimony->name}}</h3>
                            <span>{{$testimony->job}}</span>
                        </div>
                    </div>
                    <p>“{{$testimony->content}}”</p>
                </div>
                @endforeach
            </div>
        </div>
    </section> --}}

@endsection
