@extends('layouts.app')


@section('content')


  <!-- Meet Us Section  -->
  <div class="section bg-neutral-100">
    <div class="section__gap-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-xl-8">
            <span class="d-block h5 lh-1 fw-semibold clr-base text-center"> Meet us in our Offices </span>
            <h2 class="mt-5 mb-5 text-center"> Our company is all around the world, come and visit us </h2>
            <p class="text-center"> We deliver unrivaled experiences and solutions that result in competitive
              advantages. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="section__gap-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="text-center">
              <a href="/contact" class="bttn bttn--base bttn-md bttn-pill gap-2 fw-md flex-shrink-0"> Let’s
                  Call Us <span class="material-symbols-rounded mat-icon size-16 fw-400 bttn__icon-cover">
                  headphones </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-xl">
      <div class="row g-6 gy-10">
        <div class="col-md-6">
          <div class="location-card">
            <img src="{{asset('website/assets/images/banners/location-card-1.jpg')}}" alt="image" class="img-fluid w-100 rounded-4">
            <div class="group group-row align-items-center justify-content-between mt-8">
              <div class="flex-grow-1">
                <h4 class="mb-1">Egypt ( Cairo )</h4>
                <span class="sm-text d-block mb-1"> mutaqanah@gmail.com </span>
                <span class="d-block accent-text-clr fw-md"> +2010 27 855 104 </span>
              </div>
              <div class="flex-shrink-0">
                <button class="bttn bttn--base bttn--sqr rounded">
                  <span class="material-symbols-rounded"> arrow_forward_ios </span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="location-card">
            <img src="{{asset('website/assets/images/banners/location-card-2.jpg')}}" alt="image" class="img-fluid w-100 rounded-4">
            <div class="group group-row align-items-center justify-content-between mt-8">
              <div class="flex-grow-1">
                <h4 class="mb-1"> Saudi Arabia ( Riyadh ) </h4>
                <span class="sm-text d-block mb-1"> mutaqana@outlook.com </span>
                <span class="d-block accent-text-clr fw-md"> +966 53 292 0740 </span>
              </div>
              <div class="flex-shrink-0">
                <button class="bttn bttn--base bttn--sqr rounded">
                  <span class="material-symbols-rounded"> arrow_forward_ios </span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Meet Us Section End -->
    <!-- Contact Section  -->

    <section class="main-contact-area pb-100">
        <div class="section__gap-bottom">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-10 col-xl-8">
                  <span class="d-block h5 lh-1 fw-semibold clr-base text-center"> Got a Question? </span>
                  <h2 class="mt-5 mb-5 text-center"> We are Here to Answer It! </h2>
                  <p class="text-center"> Please send us information about your project. One of our project managers shall
                    evaluate your project requirements and give you a formal proposal. Detailed information will help us
                    evaluate your project </p>
                </div>
              </div>
            </div>
          </div>
        <div class="container">
            <div class="row">

            <div class="col-lg-6">
            @if(session('message') ?? '' )
            <div class="alert alert-success" role="alert">
                {{session('message') ?? ''}}
            </div>
            @endif
            <form id="contactForm" method="POST" action="{{route('mail.send')}}" class="contact-form-1 bg-base p-5 py-md-10 rounded-4">
                @csrf
                <div class="row g-4">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control rounded-pill contact-form-1__input @error('name') is-invalid @enderror"  value="{{ old('name') }}" required data-error="Please Your Name"  placeholder="Name*" autocomplete="off">
                            @error('name')
                            <span class="help-block with-errors" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="email" name="mail" id="mail" class="form-control rounded-pill contact-form-1__input @error('mail') is-invalid @enderror" value="{{ old('mail') }}" required data-error="Please Your Email"  placeholder="Email*" autocomplete="off">
                            @error('mail')
                            <span class="help-block with-errors" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required class="form-control rounded-pill contact-form-1__input rounded-pill contact-form-1__input @error('phone') is-invalid @enderror" data-error="Please Your Phone"  placeholder="Phone*" autocomplete="off">
                            @error('phone')
                            <span class="help-block with-errors" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="subject" id="subject" value="{{ old('subject') }}" class="form-control rounded-pill contact-form-1__input @error('subject') is-invalid @enderror" required data-error="Please Your Subject"  placeholder="Subject*" autocomplete="off">
                            @error('subject')
                            <span class="help-block with-errors" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control contact-form-1__input rounded-8" id="message" rows="8" required data-error="Please Your Message"  placeholder="Message*"> {{ old('message') }} </textarea>
                            @error('message')
                            <span class="help-block with-errors" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="newsletter-subscribe">
                          <label class="form-check-label clr-light" for="newsletter-subscribe"> I would like to be updated on
                            the latest products, event announcements </label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="accept-terms">
                          <label class="form-check-label clr-light" for="accept-terms"> I have read and accepted the Terms &
                            Conditions Privacy Policy </label>
                        </div>
                      </div>
                    <div class="col-lg-12 col-md-12">
                            <div class="text-center mt-6">
                        <button type="submit" class="bttn bttn--warning bttn-md bttn-pill fw-md">
                        <span>
                            Send Massege
                            <i class="ri-arrow-right-circle-line"></i>
                        </span>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                            </div>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-lg-6">
                <ul class="list gap-0 service-link-list">
                  <li>
                    <a href="#" class="t-link service-link clr-heading :clr-light border-bottom">
                      <span class="group gap-1">
                        <span class="d-inline-block service-link__title fw-bold"> Book a Demo </span>
                        <span class="d-block"> with our engagement specialist </span>
                      </span>
                      <span class="service-link__icon clr-light bg-base">
                        <span class="material-symbols-outlined mat-icon"> arrow_forward_ios </span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="t-link service-link clr-heading :clr-light border-bottom">
                      <span class="group gap-1">
                        <span class="d-inline-block service-link__title fw-bold"> Send Your CV </span>
                        <span class="d-block"> if you want to join our team </span>
                      </span>
                      <span class="service-link__icon clr-light bg-base">
                        <span class="material-symbols-outlined mat-icon"> arrow_forward_ios </span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="t-link service-link clr-heading :clr-light">
                      <span class="group gap-1">
                        <span class="d-inline-block service-link__title fw-bold"> Reach Us via Email </span>
                        <span class="d-block"> info@mutqana.com </span>
                      </span>
                      <span class="service-link__icon clr-light bg-base">
                        <span class="material-symbols-outlined mat-icon"> arrow_forward_ios </span>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
        </div>
    </div>
    </section>
      <!-- Contact Section End -->
  <!-- Testimonials  -->
  {{-- <div class="section">
    <div class="section__gap-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-xl-8">
            <div class="text-center">
              <span class="d-inline-block h5 lh-1 fw-semibold clr-base"> The Opinions of Our Customers </span>
              <h2 class="mt-5 mb-5"> Don’t take our word for it. See what our clients say </h2>
              <p class="mx-auto t-short-para"> What follows are some of the comments made by our clients.Don't take it
                on faith that we said it. Check out what some of our previous customers had to say. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid p-md-0">
      <div class="row g-md-0">
        <div class="col-12">
          <div class="swiper testimonial-slider-1">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="feedback-card-1">
                  <ul class="list list-row list-xxs align-items-center lh-1">
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                  </ul>
                  <p> Best Freelancer Team! After assessing numerous experts for 2 years, I regret not finding
                    point2solutions sooner. This group is mine, thus I'm hesitant to write it. This is my go-to team!
                  </p>
                  <hr class="hr">
                  <div class="group group-md group-row align-items-center">
                    <div class="user user--xmd user-outline-base flex-shrink-0 rounded-circle">
                      <span class="user__img rounded-circle">
                        <img src="{{asset('website/assets/images/team-8.jpg')}}" alt="image" class="user__img-is">
                      </span>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-1"> Tony Stark </h5>
                      <p class="sm-text"> Biffco Ltd. </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="feedback-card-1">
                  <ul class="list list-row list-xxs align-items-center lh-1">
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                  </ul>
                  <p> Best Freelancer Team! After assessing numerous experts for 2 years, I regret not finding
                    point2solutions sooner. This group is mine, thus I'm hesitant to write it. This is my go-to team!
                  </p>
                  <hr class="hr">
                  <div class="group group-md group-row align-items-center">
                    <div class="user user--xmd user-outline-base flex-shrink-0 rounded-circle">
                      <span class="user__img rounded-circle">
                        <img src="{{asset('website/assets/images/team-7.jpg')}}" alt="image" class="user__img-is">
                      </span>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-1"> Karen Aabye </h5>
                      <p class="sm-text"> Nv. & travel </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="feedback-card-1">
                  <ul class="list list-row list-xxs align-items-center lh-1">
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                  </ul>
                  <p> Best Freelancer Team! After assessing numerous experts for 2 years, I regret not finding
                    point2solutions sooner. This group is mine, thus I'm hesitant to write it. This is my go-to team!
                  </p>
                  <hr class="hr">
                  <div class="group group-md group-row align-items-center">
                    <div class="user user--xmd user-outline-base flex-shrink-0 rounded-circle">
                      <span class="user__img rounded-circle">
                        <img src="{{asset('website/assets/images/team-1.jpg')}}" alt="image" class="user__img-is">
                      </span>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-1"> Bertus Aafjes </h5>
                      <p class="sm-text"> YA Ltd. </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="feedback-card-1">
                  <ul class="list list-row list-xxs align-items-center lh-1">
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                  </ul>
                  <p> Best Freelancer Team! After assessing numerous experts for 2 years, I regret not finding
                    point2solutions sooner. This group is mine, thus I'm hesitant to write it. This is my go-to team!
                  </p>
                  <hr class="hr">
                  <div class="group group-md group-row align-items-center">
                    <div class="user user--xmd user-outline-base flex-shrink-0 rounded-circle">
                      <span class="user__img rounded-circle">
                        <img src="{{asset('website/assets/images/team-6.jpg')}}" alt="image" class="user__img-is">
                      </span>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-1"> Patricia Aakhus </h5>
                      <p class="sm-text"> Biffco Ltd. </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="feedback-card-1">
                  <ul class="list list-row list-xxs align-items-center lh-1">
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                  </ul>
                  <p> Best Freelancer Team! After assessing numerous experts for 2 years, I regret not finding
                    point2solutions sooner. This group is mine, thus I'm hesitant to write it. This is my go-to team!
                  </p>
                  <hr class="hr">
                  <div class="group group-md group-row align-items-center">
                    <div class="user user--xmd user-outline-base flex-shrink-0 rounded-circle">
                      <span class="user__img rounded-circle">
                        <img src="{{asset('website/assets/images/team-5.jpg')}}" alt="image" class="user__img-is">
                      </span>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-1"> Jane Aaron </h5>
                      <p class="sm-text"> Biffco Ltd. </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="feedback-card-1">
                  <ul class="list list-row list-xxs align-items-center lh-1">
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                  </ul>
                  <p> Best Freelancer Team! After assessing numerous experts for 2 years, I regret not finding
                    point2solutions sooner. This group is mine, thus I'm hesitant to write it. This is my go-to team!
                  </p>
                  <hr class="hr">
                  <div class="group group-md group-row align-items-center">
                    <div class="user user--xmd user-outline-base flex-shrink-0 rounded-circle">
                      <span class="user__img rounded-circle">
                        <img src="{{asset('website/assets/images/team-4.jpg')}}" alt="image" class="user__img-is">
                      </span>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-1"> Hans Aanrud </h5>
                      <p class="sm-text"> Biffco Ltd. </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="feedback-card-1">
                  <ul class="list list-row list-xxs align-items-center lh-1">
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                    <li>
                      <span class="material-symbols-outlined mat-icon solid text-warning size-32"> star </span>
                    </li>
                  </ul>
                  <p> Best Freelancer Team! After assessing numerous experts for 2 years, I regret not finding
                    point2solutions sooner. This group is mine, thus I'm hesitant to write it. This is my go-to team!
                  </p>
                  <hr class="hr">
                  <div class="group group-md group-row align-items-center">
                    <div class="user user--xmd user-outline-base flex-shrink-0 rounded-circle">
                      <span class="user__img rounded-circle">
                        <img src="{{asset('website/assets/images/team-3.jpg')}}" alt="image" class="user__img-is">
                      </span>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-1"> David Aaron </h5>
                      <p class="sm-text"> Biffco Ltd. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- Testimonials End -->
  {{--
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1 title="اتصل بنا">اتصل بنا</h1>
                <ul>
                    <li>
                        <a href="{{route('mail')}}" title="الرئيسية">
                            الرئيسية
                        </a>
                    </li>
                    <li class="active" title="اتصل  مع القبطان">اتصل بنا</li>
                </ul>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="{{asset('website/assets/images/page-title-shape-1.png')}}" alt="اتصل بنا">
        </div>
        <div class="shape shape-2">
            <img src="{{asset('website/assets/images/page-title-shape-2.png')}}" alt="اتصل بنا">
        </div>
    </div>


    <div class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info">
                        <i class="ri-map-pin-fill"></i>
                        <div class="count-title">
                            <p>{{$setting->location}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info">
                        <i class="ri-phone-fill"></i>
                        <div class="count-title">
                            <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-contact-info">
                        <i class="ri-mail-fill"></i>
                        <div class="count-title">
                            <a href="mailto:{{$setting->email}}"><span class="__cf_email__" >[{{$setting->email}}]</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="map-area pb-100">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51502.423422968604!2d-115.24877995231783!3d36.21758989848515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8eaf574293f1b%3A0x8e720e5b03149745!2sLas%20Vegas%2C%20NV%2089108%2C%20USA!5e0!3m2!1sen!2sbd!4v1612342385496!5m2!1sen!2sbd"></iframe>
    </div> --}}

@endsection
