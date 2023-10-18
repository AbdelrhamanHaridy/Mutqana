 <!-- Footer  --
<footer class="footer-area bg-color pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget single-bg">
                    <a href="{{url('/')}}" class="logo">
                        <img src="{{asset('website/assets/images/logo.png')}}" alt="Image">
                    </a>
                    <p title="{{$setting->content}}">{{$setting->content}}</p>
                    <ul class="social-icon">
                        <li><a href="https://www.facebook.com/{{$setting->facebook}}" rel="nofollow" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                        <li><a href="https://www.instagram.com/{{$setting->instagram}}" rel="nofollow" target="_blank"><i class="ri-instagram-line"></i></a></li>
                        <li><a href="https://twitter.com/{{$setting->twitter}}" rel="nofollow" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3 title="ابقى على تواصل معنا فى القبطان">ابقى على تواصل معنا</h3>
                    <ul class="address">
                        <li><span title="{{$setting->location}}"><i class="ri-map-pin-fill"></i> العنوان:</span>{{$setting->location}}</li>
                        <li class="location">
                            <span title="{{$setting->phone}}"><i class="ri-phone-fill"></i> الهاتف:</span>
                            <a href="tel:{{$setting->phone}}" rel="nofollow">{{$setting->phone}}</a>
                        </li>
                        <li>
                            <span title="{{$setting->email}}"><i class="ri-mail-fill"></i> الايميل:</span>
                            <a href="mailto:{{$setting->email}}" rel="nofollow">{{$setting->email}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>مسارات</h3>
                    <ul class="import-link">
                        <li><a href="{{route('home')}}">الرئيسية</a></li>
                        <li><a href="{{route('about')}}">عن الشركة</a></li>
                        <li><a href="{{route('services')}}">خدماتنا</a></li>
                        <li><a href="{{route('mail')}}">اتصل بنا</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget newsletter">
                    <h3>مميزاتنا</h3>
                    <p>نقل الأثاث داخل وخارج الرياض فك وتغليف ونقل وتركيب دون أى خدش للأثاث ونقدم لكم أفضل الأسعار والخصومات.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
  <!-- Footer  -->
  <div id="myButton"></div>
  <footer class="footer-3 bg-neutral-100">
    <div class="section">
      <div class="container">
        <div class="row g-4">
          <div class="col-xl-4">
            <a href="{{url('/')}}" class="logo mb-6">
              <img src="{{asset('website/assets/images/banners/logo.png')}}" alt="image" class="logo__img">
            </a>
            <p class="mb-6 t-short-para"> We Deal With Aspects Professional IT Services.We Increasing Business Success
              With Technology.Making IT A Part Of Your Business.Excellent IT Services for Your Success. </p>
            <p>
              <span class="fw-md"  title="{{$setting->location}}">Adress: {{$setting->location}}</span>
            </p>
            <p>
              <span class="fw-md" title="{{$setting->email}}">Email: <a href="mailto:{{$setting->email}}" rel="nofollow">{{$setting->email}}</a></span>
            </p>
            <p>
              <span  class="fw-md"  title="{{$setting->phone}}">Phone: <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a> </span>
            </p>
          </div>
          <div class="col-md-3 col-xl-2">
            <h5 class="mb-10"> IT Services </h5>
            <ul class="list list-xsm">
              <li>
                <a href="#" class="t-link clr-heading :clr-base"> About Us </a>
              </li>
              <li>
                <a href="service-1.html" class="t-link clr-heading :clr-base"> Know Mutqana </a>
              </li>
              <li>
                <a href="case-study-1.html" class="t-link clr-heading :clr-base"> Clients </a>
              </li>
              <li>
                <a href="/contact" class="t-link clr-heading :clr-base"> Success stories
                </a>
              </li>
              <li>
                <a href="choose-us-1.html" class="t-link clr-heading :clr-base"> Why Choose Us </a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 col-xl-2">
            <h5 class="mb-10">Software </h5>
            <ul class="list list-xs">
              <li>
                <a href="referral.html" class="t-link clr-heading :clr-base"> Agile Software </a>
              </li>
              <li>
                <a href="coming-soon.html" class="t-link clr-heading :clr-base"> IT Payments </a>
              </li>
              <li>
                <a href="terms-condition.html" class="t-link clr-heading :clr-base"> DevOps and more </a>
              </li>
              <li>
                <a href="blog-page-1.html" class="t-link clr-heading :clr-base"> QA and Automation </a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 col-xl-2">
            <h5 class="mb-10"> Support </h5>
            <ul class="list list-xs">
              <li>
                <a href="/contact" class="t-link clr-heading :clr-base"> Contact Us </a>
              </li>
              <li>
                <a href="facts-1.html" class="t-link clr-heading :clr-base"> Facts </a>
              </li>
              <li>
                <a href="" class="t-link clr-heading :clr-base"> FAQ </a>
              </li>
              <li>
                <a href="help-center.html" class="t-link clr-heading :clr-base"> Help Center </a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 col-xl-2">
            <h5 class="mb-10"> Links Of Interest </h5>
            <ul class="list list-xsm">
              <li>
                <a href="leadership-page.html" class="t-link clr-heading :clr-base"> Work with us </a>
              </li>
              <li>
                <a href="getting-started.html" class="t-link clr-heading :clr-base"> Innovation </a>
              </li>
              <li>
                <a href="service-details-1.html" class="t-link clr-heading :clr-base"> Experience Focus </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="pt-8 pb-8">
      <div class="container">
        <div class="row g-4 align-items-md-center">
          <div class="col-md-6">
            <p class="text-center text-md-start"> Copyright 2023 Mutqana All Rights Reserved. </p>
          </div>
          <div class="col-md-6">
            <ul class="list list-xs list-row justify-content-center justify-content-md-end">
              <li>
                <a href="https://www.facebook.com/{{$setting->facebook}}" class="t-link social-icon social-icon--xs social-icon--base-outline social-icon--circle">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/{{$setting->twitter}}" class="t-link social-icon social-icon--xs social-icon--base-outline social-icon--circle">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/{{$setting->instagram}}" class="t-link social-icon social-icon--xs social-icon--base-outline social-icon--circle">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="#" class="t-link social-icon social-icon--xs social-icon--base-outline social-icon--circle">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </footer>
  <!-- Footer End -->
