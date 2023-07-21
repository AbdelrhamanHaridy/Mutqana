@extends('layouts.app')

@section('content')
<div id="preloader" class="preloader">
    <div class='inner'>
        <div class='line1'></div>
        <div class='line2'></div>
        <div class='line3'></div>
    </div>
</div>
<section class="fxt-template-animation fxt-template-layout33">
    <div class="fxt-content-wrap">
        <div class="fxt-heading-content">
            <div class="fxt-inner-wrap fxt-transformX-R-50 fxt-transition-delay-3">
                <div class="fxt-transformX-R-50 fxt-transition-delay-10">
                    <a href="login-33.html" class="fxt-logo"><img src="img/logo-33.png" alt="Logo"></a>
                </div>
                <div class="fxt-transformX-R-50 fxt-transition-delay-10">
                    <div class="fxt-middle-content">
                        <div class="fxt-sub-title">Welcome to</div>
                        <h1 class="fxt-main-title">We're a Digital Agency.</h1>
                        <p class="fxt-description">We are glad to see you again! Get access to your Orders, Wishlist and Recommendations.</p>
                    </div>
                </div>
                <div class="fxt-transformX-R-50 fxt-transition-delay-10">
                    <div class="fxt-switcher-description">Don't have an account?<a href="register-33.html" class="fxt-switcher-text">Register</a></div>
                </div>
            </div>
        </div>
        <div class="fxt-form-content">
            <div class="fxt-main-form">
                <div class="fxt-inner-wrap fxt-opacity fxt-transition-delay-13">
                    <h2 class="fxt-page-title">Log In</h2>
                    <p class="fxt-description">Log In to try our amazing servuces</p>
                    <form method="POST">
                        <div class="form-group">
                            <label for="email" class="fxt-label">Email Address</label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email" required="required">
                        </div>
                        <div class="form-group">
                            <label for="password" class="fxt-label">Password</label>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Enter Password" required="required">
                        </div>
                        <div class="form-group">
                            <a href="forgot-password-33.html" class="fxt-switcher-text">Forgot Password</a>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="fxt-btn-fill">Log in</button>
                        </div>
                    </form>
                    <div class="fxt-divider-text">OR</div>
                    <div id="fxt-login-option" class="fxt-login-option">
                        <ul>
                            <li class="fxt-google active">
                                <a href="#">
                                    <span class="fxt-option-icon"><i class="fab fa-google"></i></span>
                                    <span class="fxt-option-text ml-2">Continue with Google</span>
                                </a>
                            </li>
                            <li class="fxt-facebook">
                                <a href="#">
                                    <span class="fxt-option-icon"><i class="fab fa-facebook-f"></i></span>
                                    <span class="fxt-option-text ml-2">Continue with Facebook</span>
                                </a>
                            </li>
                            <li class="fxt-apple">
                                <a href="#">
                                    <span class="fxt-option-icon"><i class="fab fa-apple"></i></span>
                                    <span class="fxt-option-text ml-2">Continue with Apple</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>تسجيل الدخول</h1>
                <ul>
                    <li>
                        <a href="{{route('home')}}">
                            الرئيسية
                        </a>
                    </li>
                    <li class="active">تسجيل الدخول</li>
                </ul>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="{{asset('website/assets/images/page-title-shape-1.png')}}" alt="تسجيل الدخول">
        </div>
        <div class="shape shape-2">
            <img src="{{asset('website/assets/images/page-title-shape-2.png')}}" alt="تسجيل الدخول">
        </div>
    </div>


    <section class="user-area log-in-area ptb-100">
        <div class="container">
            <div class="user-form-content">
                <h2>تسجيل الدخول إلى حسابك</h2>
                <form action="{{ route('login') }}" method="POST" class="user-form">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>البريد الإلكتروني</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>كلمة السر</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="login-action" dir="ltr">
                                <span class="log-rem">
                                    <input id="remember-2" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label>أبق تسجيل دخولي</label>
                                </span>
                                @if (Route::has('password.request'))

                                    <span class="forgot-login">
                                       <a href="{{ route('password.request') }}">نسيت رقمك السري؟</a>
                                    </span>
                                @endif

                            </div>
                        </div>
                        <div class="col-12">
                            <button class="default-btn" type="submit">
                                تسجيل الدخول
                            </button>
                        </div>

                        <div class="col-12">
                            <p class="create">ليس لديك حساب؟ <a href="{{route('register')}}">تسجيل الحساب</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
