@extends('layouts.app')


@section('content')
<div class="hero-3__content">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-8 col-xxl-6" style="margin: auto;">
            <span class="d-block h4 fw-semibold clr-base mb-2"> Take the best path forward </span>
            <h3 class="mb-4"> IT Services and Software


              <span class="clr-base">Business.</span>
            </h3>
            <p class=" xl-text mb-8"> For over 30 years, we've been driving technological innovation and
              Whether you're looking to upgrade your existing systems, implement new software, or optimize your network,
              we're here to help.

              Our solutions are tailored to meet your specific needs, and we work closely with you to ensure that you're
              getting the results you need to succeed.
            </p>

          </div>
          <div class="col-md-4 col-xxl-6">
            <img src="{{asset('website/assets/images/banners/sofware.png')}}" class="w-100" alt="">
          </div>
        </div>
      </div>
    </div>
 <!-- About Section  -->
 <div class="section about-section-1">
    <div class="section__gap-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-11 col-xl-6">
            <span class="d-block h5 lh-1 fw-semibold clr-base text-center"> TAKE YOUR BUSINESS TO THE NEXT LEVEL</span>
            <h2 class="mt-5 mb-5 text-center"> How Mutqanah Assist Your Business </h2>
            <p class="text-center mx-auto max-text-60"> We Offer Unique Services Tailored Specifically for Your
              Company.Innovative Methods to Help Boost Your Company's Profits </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-xxl">
      <div class="row g-4">
        {{-- <div class="row">
            @foreach($services as $service)
            <div class="col-lg-3 col-sm-6 ">
                <div class="single-services-box">
                    <a href="javascript:void(0);"><img src="{{$service->photo}}" alt="Images"></a>
                    <h3><a href="javascript:void(0);">{{$service->title}}</a></h3>
                    <p>{!! $service->content !!}</p>
                </div>
            </div>
            @endforeach
        </div> --}}
        @foreach($services as $service)
        <div class="col-md-6 col-xl-4">

          <div class="about-card-1">
            <div class="icon-box icon-box--md circle icon-box--base-outline clr-heading">
              <span class=""><img src="{{$service->photo}}"  alt=""></span>
            </div>
            <h5 class="mt-8 mb-5"> {{$service->title}} </h5>
            <p class="mb-6">{!! $service->content !!}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- About Section End -->
  <!-- CTA Section  -->
  <div class="cta-section-1">
    <div class="cta-section-1__content section">
      <div class="container">
        <div class="row justify-content-center justify-content-xl-end">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <img src="{{asset('website/assets/images/banners/alvaro-reyes-fSWOVc3e06w-unsplash.jpg')}}" alt="">
              </div>
          <div class="col-md-6 col-lg-6 col-xl-6">
            <h3 class="clr-light mb-10 text-center text-xl-start"> We offer many different IT services that guarantee
              your <span class="clr-accent">success</span>. </h3>
            <div
              class="group group-xmd group-row flex-wrap justify-content-center justify-content-xl-start align-items-center">
              <a href="contact-us.html" class="bttn bttn-pill bttn-md bttn--light-accent align-items-center fw-md">
                Talk to a Digital Expert today! </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CTA Section End -->

  <!-- Work Process Section  -->
  <section class="section">
    <div class="section__gap-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-xl-7">
            <span class="d-block h5 lh-1 fw-semibold clr-base text-center"> How It Works </span>
            <h2 class="mt-5 mb-5 text-center"> Our Work Processs </h2>
            <p class="text-center mx-auto max-text-60"> Expertise Will Be Provided In Order To Improve Your Cyber
              Defenses To get our cyber security services, there are only a few straightforward actions to do. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row gy-5 g-4 justify-content-center">
        <div class="col-sm-6 col-lg-3">
          <div class="process-card-2 process-card-2--1 text-center">
            <div class="process-card-2__icon">
              <img src="{{asset('website/assets/images/icon-47.png')}}" alt="image" class="img-fluid">
              <span class="process-card-2__notification"> 01 </span>
            </div>
            <h5 class="mt-8 mb-2"> Choose A Service </h5>
            <p> sit amet consectetuer adipiscing elitenean commodo ligula </p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="process-card-2 process-card-2--2 text-center">
            <div class="process-card-2__icon">
              <img src="{{asset('website/assets/images/icon-48.png')}}" alt="image" class="img-fluid">
              <span class="process-card-2__notification"> 02 </span>
            </div>
            <h5 class="mt-8 mb-2"> Request A Meeting </h5>
            <p> sit amet consectetuer adipiscing elitenean commodo ligula </p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="process-card-2 process-card-2--1 text-center">
            <div class="process-card-2__icon">
              <img src="{{asset('website/assets/images/icon-49.png')}}" alt="image" class="img-fluid">
              <span class="process-card-2__notification"> 03 </span>
            </div>
            <h5 class="mt-8 mb-2"> Start Planning </h5>
            <p> sit amet consectetuer adipiscing elitenean commodo ligula </p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="process-card-2 text-center">
            <div class="process-card-2__icon">
              <img src="{{asset('website/assets/images/icon-50.png')}}" alt="image" class="img-fluid">
              <span class="process-card-2__notification"> 04 </span>
            </div>
            <h5 class="mt-8 mb-2"> Lets Make security Happen </h5>
            <p> sit amet consectetuer adipiscing elitenean commodo ligula </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Work Process Section End -->
  <!-- Technologies  -->
  <div class="section bg-base">
    <div class="section__gap-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-xl-7">
            <h2 class="text-center clr-light mb-5 clr-light"> We Hold Expertise in the Following Technologies </h2>
            <p class="text-center mx-auto max-text-60 clr-light"> We Offer Unique Services Tailored Specifically for
              Your Company.Innovative Methods to Help Boost Your Company's Profits </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row g-4">
        <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2">
          <div class="toolset">
            <div class="toolset__icon">
              <img src="{{asset('website/assets/images/brand-icon-1.png')}}" alt="images" class="img-fluid">
            </div>
            <div class="toolset__content">
              <p class="fw-md lg-text clr-heading"> Android </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2">
          <div class="toolset">
            <div class="toolset__icon">
              <img src="{{asset('website/assets/images/brand-icon-2.png')}}" alt="images" class="img-fluid">
            </div>
            <div class="toolset__content">
              <p class="fw-md lg-text clr-heading"> Codeignitor </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2">
          <div class="toolset">
            <div class="toolset__icon">
              <img src="{{asset('website/assets/images/brand-icon-3.png')}}" alt="images" class="img-fluid">
            </div>
            <div class="toolset__content">
              <p class="fw-md lg-text clr-heading"> Flutter </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2">
          <div class="toolset">
            <div class="toolset__icon">
              <img src="{{asset('website/assets/images/brand-icon-4.png')}}" alt="images" class="img-fluid">
            </div>
            <div class="toolset__content">
              <p class="fw-md lg-text clr-heading"> Nodejs </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2">
          <div class="toolset">
            <div class="toolset__icon">
              <img src="{{asset('website/assets/images/brand-icon-5.png')}}" alt="images" class="img-fluid">
            </div>
            <div class="toolset__content">
              <p class="fw-md lg-text clr-heading"> Python </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2">
          <div class="toolset">
            <div class="toolset__icon">
              <img src="{{asset('website/assets/images/brand-icon-6.png')}}" alt="images" class="img-fluid">
            </div>
            <div class="toolset__content">
              <p class="fw-md lg-text clr-heading"> React </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2">
          <div class="toolset">
            <div class="toolset__icon">
              <img src="{{asset('website/assets/images/brand-icon-7.png')}}" alt="images" class="img-fluid">
            </div>
            <div class="toolset__content">
              <p class="fw-md lg-text clr-heading"> Swift </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2">
          <div class="toolset">
            <div class="toolset__icon">
              <img src="{{asset('website/assets/images/brand-icon-8.png')}}" alt="images" class="img-fluid">
            </div>
            <div class="toolset__content">
              <p class="fw-md lg-text clr-heading"> Angular </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2">
          <div class="toolset">
            <div class="toolset__icon">
              <img src="{{asset('website/assets/images/brand-icon-9.png')}}" alt="images" class="img-fluid">
            </div>
            <div class="toolset__content">
              <p class="fw-md lg-text clr-heading"> C Sharp </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2">
          <div class="toolset">
            <div class="toolset__icon">
              <img src="{{asset('website/assets/images/brand-icon-10.png')}}" alt="images" class="img-fluid">
            </div>
            <div class="toolset__content">
              <p class="fw-md lg-text clr-heading"> Java </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2">
          <div class="toolset">
            <div class="toolset__icon">
              <img src="{{asset('website/assets/images/brand-icon-11.png')}}" alt="images" class="img-fluid">
            </div>
            <div class="toolset__content">
              <p class="fw-md lg-text clr-heading"> Windows </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2">
          <div class="toolset">
            <div class="toolset__icon">
              <img src="{{asset('website/assets/images/brand-icon-12.png')}}" alt="images" class="img-fluid">
            </div>
            <div class="toolset__content">
              <p class="fw-md lg-text clr-heading"> Laravel </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section__gap-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-xl-8">
            <div class="group group-row justify-content-center">
              <a href="about-us-1.html"
                class="bttn bttn-pill bttn-md bttn--light-accent align-items-center gap-2 fw-md"> More About Us <span
                  class="material-symbols-rounded mat-icon size-16 fw-400 bttn__icon-base"> arrow_forward </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Technologies End -->

  <section class="p-8">
    <div class="container">
      <div class="row g-4 align-items-center justify-content-xxl-between">
        <div class="col-lg-12 col-xl-12 col-xxl-12">
          <h3>“You can design and create, and build the most wonderful place in the world. But it takes people to make
            the dream a reality.”</h3>
          <p>-Walt Disney-

          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- CTA -->
  <div class="section--sm cta-section-3">
    <div class="container">
      <div class="row g-4 align-items-center justify-content-xxl-between">
        <div class="col-lg-5 col-xl-5 col-xxl-5">
          <img src="{{asset('website/assets/images/banners/pexels-mikhail-nilov-8729928.jpg')}}" class="w-100" alt="image">
        </div>
        <div class="col-lg-7 col-xl-7">
          <div
            class="group group-xmd group-row flex-wrap justify-content-center justify-content-lg-start align-items-center">
            <div class="flex-grow-1">
              <h3 class="clr-light mb-3">Are you looking for your new digital Partner?
              </h3>
              <h5 class="clr-light">
                Together we move faster

              </h5>
              <p class="clr-light max-text-50">We adapt to provide the right solutions to our customers: personalized
                service, multicultural and multi-time zones.
              </p>
            </div>
            <a href="contact-us.html" class="bttn bttn-pill bttn-md bttn--light-accent align-items-center fw-md">
              Accessible IT from beginning to
              end </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CTA End -->
  {{--
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1 title="الرئيسية">الخدمات</h1>
                <ul>
                    <li><a href="{{route('home')}}" title="الرئيسية">الرئيسية</a></li>
                    <li class="active" title="الخدمات">الخدمات</li>
                </ul>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="{{asset('website/assets/images/page-title-shape-1.png')}}" alt="الخدمات">
        </div>
        <div class="shape shape-2">
            <img src="{{asset('website/assets/images/page-title-shape-2.png')}}" alt="الخدمات">
        </div>
    </div>


    <section class="success-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2 title="نحن نقدم خدمات النقل والخدمات اللوجستية لتحقيق نجاح العملاء">نحن نقدم خدمات النقل والخدمات اللوجستية لتحقيق نجاح العملاء</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-success">
                        <i class="flaticon-supply-chain"></i>
                        <h3>حلول سلاسل التوريد</h3>
                        <p>استراتيجية سلسلة التوريد :هي التي تمكن المنظمات من تحقيق التوافق بين استراتيجية الأعمال عموما وعمليات سلسلة التوريد الحالية ، وذلك لبناء قاعدة القيمة ، مع الأخذ فى الاعتبار عنصر الوقت ، لتحقيق التحسينات المطلوبة وخلق القيمة المستدامة لعمليات الأعمال ونظم خريطة الطريق على مستوى الأجل الطويل </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-success">
                        <i class="flaticon-internet"></i>
                        <h3>تخزين الشحن</h3>
                        <p>تدرك القبطان أهمية دور التخزين في إطار الدورة الأوسع لسلسلة التوريد. وعليه، تتولى القبطان خدمات تخزين وإدارة مخزونك في مراكز الخدمات اللوجستية المتطورة التابعة لها</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-success">
                        <i class="flaticon-distribution-1"></i>
                        <h3>حلول الشحن حول العالم</h3>
                        <p>توفر شركة القبطان الدولي الخدمات للبضائع كجزء من برنامجها الشامل للشحن حول العالم، حيث يمكنها من خلال هذه الخدمات الربط بين أمريكا الشمالية وأمريكا اللاتينية ومنطقة أسيا والمحيط الهادى وأوروبا وإفريقيا والشرق الأوسط</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-area services-area-style-two bg-color pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>خدمات الشحن</span>
                <h2>ما يمكننا القيام به بالنسبة لك</h2>
            </div>
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services-box">
                        <a href="javascript:void(0);"><img src="{{$service->photo}}" alt="Images"></a>
                        <h3><a href="javascript:void(0);">{{$service->title}}</a></h3>
                        <p>{!! $service->content !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section> --}}

@endsection
