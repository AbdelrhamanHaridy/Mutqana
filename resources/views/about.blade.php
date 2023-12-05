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
  <!-- Features Section  -->
  <div class="section">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
<img src="{{asset('website/assets/images/banners/SPhoto1.png')}}" alt="">
        </div>
        <div class="col-lg-6">
<div class="row" style="background: white">

            <div class="col-lg-12" style="    padding: 70px 20px;">
          <div class="section__gap-top pt-lg-0">
            <span class="d-inline-block h5 lh-1 fw-semibold clr-base overlay-text"> Our Mission<span class="overlay-text__content">  Our Mission </span>
            </span>
                <div class="group group-row icon">
                    <p class="">

In a world rapidly evolving towards digital dominance, we stand as architects of the future. Our mission transcends the mere creation of applications; it is the orchestration of solutions that will forever shape the digital landscape.

We are the vanguard of this transformation, empowering businesses to seamlessly integrate into the digital ecosystem.

Our commitment extends beyond mere technological prowess; we forge strategic alliances, aligning our expertise with your vision. Together, we craft bespoke software solutions, tailored to your unique needs and aspirations.

Your success is our ultimate triumph. We strive to maximize your business's profitability, delivering tangible value to your users and propelling your products to the pinnacle of success.

Through our arsenal of cutting-edge web and mobile tools, we forge advanced technological solutions, meticulously designed to guarantee a seamless, user-friendly experience. Our creations are not mere applications; they are the embodiment of innovation and excellence.
                    </p>
                </div>

          </div>
        </div>


            <div class="col-lg-12">
              <div class="section__gap-top pt-lg-0">
                <span class="d-inline-block h5 lh-1 fw-semibold clr-base overlay-text">Our Vision<span class="overlay-text__content">Our Vision </span>
                </span>
                    <div class="group group-row icon">
                      <div class="flex-grouw-1">
                        <p class="">

                            *In an age of efficiency and convenience, Mutqana stands at the forefront, crafting digital solutions that not only meet but exceed the expectations of today's discerning consumers.*

                            As technology relentlessly reshapes the landscape, the once-dominant offline world now finds itself eclipsed by the booming mobile sphere. In this dynamic environment, Total Solutions has emerged as a beacon of innovation, paving the way for a new generation of transformative products.

                            Mutqana prides itself on being an industry leader, offering cutting-edge web and mobile development, events and training solutions that enable businesses to take their ideas to new heights. Our unwavering commitment to excellence ensures that we breathe new life into your customers' daily routines, delivering solutions that not only satisfy, but also inspire.
                        </p>
                      </div>
                    </div>

              </div>
            </div>
        </div>
    </div>

            </div>
          </div>
        </div>
      <!-- Features Section End -->
  <!-- Help Category -->
    <!-- About Company 2  -->
    <section class="">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="grid-animation">
                <span class="grid-animation__line-wrapper">
                  <span class="grid-animation__line"></span>
                </span>
                <span class="grid-animation__line-wrapper">
                  <span class="grid-animation__line"></span>
                </span>
                <span class="grid-animation__line-wrapper">
                  <span class="grid-animation__line"></span>
                </span>
                <span class="grid-animation__line-wrapper">
                  <span class="grid-animation__line"></span>
                </span>
                <span class="grid-animation__line-wrapper">
                  <span class="grid-animation__line"></span>
                </span>
                <div class="section">
                  <div class="row g-4">
                    <div class="col-md-10 col-lg-6">
                      <div class="section__gap-bottom pb-lg-0">
                        <span class="d-block h5 lh-1 fw-semibold clr-base"> Best Solutions </span>
                        <h2 class="mt-5 mb-5"> In 6 Years, we've Succeeded to Give Best Solutions. </h2>
                        <p class="mb-8 max-text-60"> We provide customized technological solutions to meet business needs and improve efficiency, which is considered one of the most important factors that help companies grow and develop </p>
                        <a href="" class="bttn bttn--base bttn-md bttn-pill fw-md flex-shrink-0"> Find Your Solutions </a>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="about-img">
                        <div class="about-img__content about-img__content-xl">
                          <img src="{{asset('website/assets/images/banners/SPhoto5.png')}}" alt="image" class="about-img__is">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- About Company 2 End -->
  <!-- Help Category End -->
  <!-- About Section  -->



  <!-- About Section End -->

  <!-- Numbers End -->
{{--

 <!-- Value Share  -- > --}}

  <!-- Value Share End -->

  {{-- <!-- Team Member  -->
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
  <!-- Feedback Section End --> --}}
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
