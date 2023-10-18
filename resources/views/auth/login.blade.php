@extends('layouts.app')

@section('content')

<style>

    /*========================================================================
    37. Demo Layout Thirty Four
    =========================================================================*/
    .fxt-template-layout34 {
        position: relative;
        min-height: 100vh;
        width: 100%;
        background-repeat: no-repeat;
        background-position: center top;
    }

    .fxt-template-layout34 .fxt-column-wrap {
        position: relative;
        min-height: 100vh;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-top: 15vh;
        padding-bottom: 15vh;
    }

    @media only screen and (max-width: 991px) {
        .fxt-template-layout34 .fxt-column-wrap {
            padding-top: 10vh;
            padding-bottom: 10vh;
            min-height: auto;
        }
    }

    @media only screen and (max-width: 767px) {
        .fxt-template-layout34 .fxt-column-wrap {
            padding-top: 8vh;
            padding-bottom: 8vh;
        }
    }

    @media only screen and (max-width: 575px) {
        .fxt-template-layout34 .fxt-column-wrap {
            padding-top: 6vh;
            padding-bottom: 6vh;
        }
    }

    .fxt-template-layout34 .fxt-shape {
        position: absolute;
        left: 0;
        top: 0;
        z-index: 0;
    }

    .fxt-template-layout34 .fxt-animated-img {
        position: absolute;
        z-index: -1;
        top: 50%;
        right: 50px;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .fxt-template-layout34 .fxt-logo {
        margin-bottom: 50px;
        display: block;
        max-width: 20vw;
    }

    .fxt-template-layout34 .fxt-main-title {
        max-width: 280px;
        width: 100%;
        font-size: 40px;
        font-weight: 700;
        color: #000000;
        margin-bottom: 20px;
    }

    @media only screen and (max-width: 991px) {
        .fxt-template-layout34 .fxt-main-title {
            font-size: 36px;
        }
    }

    @media only screen and (max-width: 767px) {
        .fxt-template-layout34 .fxt-main-title {
            font-size: 32px;
        }
    }

    @media only screen and (max-width: 575px) {
        .fxt-template-layout34 .fxt-main-title {
            font-size: 28px;
        }
    }

    .fxt-template-layout34 .fxt-switcher-description1 {
        color: #363636;
        font-size: 20px;
        max-width: 260px;
        width: 100%;
        margin-bottom: 40px;
    }

    .fxt-template-layout34 .fxt-switcher-description1 .fxt-switcher-text {
        display: inline-block;
        color: #4460f1;
        font-size: 18px;
        font-weight: 600;
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .fxt-template-layout34 .fxt-switcher-description1 .fxt-switcher-text:hover {
        color: #0925ad;
        text-decoration: underline;
    }

    .fxt-template-layout34 .fxt-switcher-description2 .fxt-switcher-text {
        color: #b1b1b2;
        font-size: 14px;
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .fxt-template-layout34 .fxt-switcher-description2 .fxt-switcher-text:hover {
        color: #1a34b8;
        text-decoration: underline;
    }

    .fxt-template-layout34 .fxt-switcher-description3 {
        text-align: center;
        font-size: 16px;
        color: #646464;
        margin-bottom: 10px;
    }

    .fxt-template-layout34 .fxt-switcher-description3 .fxt-switcher-text {
        color: #4460f1;
        font-size: 16px;
        font-weight: 500;
        display: inline-block;
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .fxt-template-layout34 .fxt-switcher-description3 .fxt-switcher-text:hover {
        color: #0f2ab2;
        text-decoration: underline;
    }

    .fxt-template-layout34 .fxt-qr-code {
        display: inline-block;
        max-width: 35vw;
    }

    .fxt-template-layout34 .fxt-qr-code img {
        -webkit-box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.1);
        box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.1);
        background-color: #ffffff;
        padding: 20px;
        border: 1px solid #dfdfdf;
    }

    @media only screen and (max-width: 575px) {
        .fxt-template-layout34 .fxt-qr-code img {
            padding: 5px;
        }
    }

    .fxt-template-layout34 .fxt-form {
        margin-top: 10px;
    }

    .fxt-template-layout34 .fxt-form .fxt-label {
        color: #14133b;
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .fxt-template-layout34 .fxt-form .form-group {
        position: relative;
        z-index: 1;
        margin-bottom: 25px;
    }

    .fxt-template-layout34 .fxt-form .form-group .field-icon {
        position: absolute;
        z-index: 1;
        right: 26px;
        bottom: 24px;
        font-size: 14px;
        color: #a1a1a1;
    }

    .fxt-template-layout34 .fxt-form .form-group .field-icon:before {
        padding: 17px 10px;
    }

    .fxt-template-layout34 .fxt-form .form-control {
        border-radius: 10px;
        background-color: #ebf0f6;
        min-height: 60px;
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 1px solid #ebf0f6;
        padding: 10px 20px;
        color: #111;
    }

    @media only screen and (max-width: 767px) {
        .fxt-template-layout34 .fxt-form .form-control {
            min-height: 50px;
        }
    }

    .fxt-template-layout34 .fxt-form input::-webkit-input-placeholder {
        color: #858588;
        font-size: 14px;
        font-weight: 300;
    }

    .fxt-template-layout34 .fxt-form input::-moz-placeholder {
        color: #858588;
        font-size: 14px;
        font-weight: 300;
    }

    .fxt-template-layout34 .fxt-form input:-moz-placeholder {
        color: #858588;
        font-size: 14px;
        font-weight: 300;
    }

    .fxt-template-layout34 .fxt-form input:-ms-input-placeholder {
        color: #858588;
        font-size: 14px;
        font-weight: 300;
    }

    .fxt-template-layout34 .fxt-form .fxt-checkbox-box {
        margin-bottom: 25px;
    }

    .fxt-template-layout34 .fxt-form .fxt-checkbox-box label {
        color: #14133b;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 500;
        position: relative;
    }

    .fxt-template-layout34 .fxt-form .fxt-checkbox-box label:before {
        content: "";
        position: absolute;
        width: 16px;
        height: 16px;
        top: 5px;
        left: 0;
        right: 0;
        border: 1px solid;
        border-color: #dcdcdc;
        border-radius: 3px;
        background-color: #fff;
        -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
        -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
        transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
    }

    .fxt-template-layout34 .fxt-form .fxt-checkbox-box label:after {
        position: absolute;
        font-size: 10px;
        color: #555555;
    }

    .fxt-template-layout34 .fxt-form .fxt-checkbox-box input[type="checkbox"] {
        display: none;
    }

    .fxt-template-layout34 .fxt-form .fxt-checkbox-box input[type="checkbox"]:checked+label::after {
        font-family: 'Font Awesome 5 Free';
        content: "\f00c";
        font-weight: 900;
        color: #ffffff;
        left: 0;
        right: 0;
        top: 5px;
        width: 16px;
        text-align: center;
    }

    .fxt-template-layout34 .fxt-form .fxt-checkbox-box input[type="checkbox"]:checked+label::before {
        background-color: #4460f1;
        border-color: #4460f1;
    }

    .fxt-template-layout34 .fxt-form .fxt-otp-logo {
        margin-bottom: 30px;
        display: block;
    }

    .fxt-template-layout34 .fxt-form .fxt-otp-row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }

    .fxt-template-layout34 .fxt-form .fxt-otp-row .fxt-otp-col {
        min-height: 50px;
        padding: 5px;
        text-align: center;
        margin-right: 15px;
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .fxt-template-layout34 .fxt-form .fxt-otp-row .fxt-otp-col:last-child {
        margin-right: 0;
    }

    .fxt-template-layout34 .fxt-form .fxt-otp-btn {
        margin-bottom: 20px;
    }

    .fxt-template-layout34 .terms-link {
        display: inline-block;
        color: #4460f1;
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .fxt-template-layout34 .terms-link:hover {
        color: #1a34b8;
        text-decoration: underline;
    }

    .fxt-template-layout34 .fxt-btn-fill {
        font-family: 'Roboto', sans-serif;
        cursor: pointer;
        display: inline-block;
        font-size: 18px;
        font-weight: 500;
        -webkit-box-shadow: none;
        box-shadow: none;
        outline: none;
        border: 0;
        color: #fff;
        border-radius: 10px;
        background-color: #4460f1;
        padding: 12px 36px;
        width: 100%;
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .fxt-template-layout34 .fxt-btn-fill:hover {
        background-color: #1a34b8;
    }

    .fxt-template-layout34 .fxt-btn-fill:focus {
        outline: none;
    }

    @media only screen and (max-width: 767px) {
        .fxt-template-layout34 .fxt-btn-fill {
            font-size: 16px;
            padding: 11px 30px;
        }
    }

    .fxt-template-layout34 .fxt-style-line {
        overflow: hidden;
        text-align: center;
        margin-bottom: 20px;
    }

    .fxt-template-layout34 .fxt-style-line span {
        text-align: center;
        font-size: 15px;
        color: #acacac;
        display: inline-block;
        position: relative;
        padding: 0 25px;
        z-index: 1;
    }

    .fxt-template-layout34 .fxt-style-line span:before {
        display: inline-block;
        content: "";
        height: 2px;
        width: 100%;
        background-color: #cfcfcf;
        left: 100%;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        position: absolute;
        z-index: 1;
    }

    .fxt-template-layout34 .fxt-style-line span:after {
        display: inline-block;
        content: "";
        height: 2px;
        width: 100%;
        background-color: #cfcfcf;
        right: 100%;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        position: absolute;
        z-index: 1;
    }

    .fxt-template-layout34 ul.fxt-socials {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-right: -5px;
        margin-left: -5px;
    }

    .fxt-template-layout34 ul.fxt-socials li {
        padding-left: 5px;
        padding-right: 5px;
        margin-bottom: 10px;
    }

    .fxt-template-layout34 ul.fxt-socials li a {
        border-radius: 10px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        font-size: 20px;
        height: 60px;
        width: 80px;
        border: 1px solid;
        border-color: #cfcfcf;
        background-color: #fefefe;
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    @media only screen and (max-width: 767px) {
        .fxt-template-layout34 ul.fxt-socials li a {
            font-size: 18px;
            height: 50px;
            width: 60px;
        }
    }

    .fxt-template-layout34 ul.fxt-socials li a:hover {
        background-color: #ffffff;
        border-color: #ffffff;
        -webkit-box-shadow: 0 0 62px 0 rgba(0, 0, 0, 0.1);
        box-shadow: 0 0 62px 0 rgba(0, 0, 0, 0.1);
    }

    .fxt-template-layout34 ul.fxt-socials li.fxt-google a {
        color: #CC3333;
    }

    .fxt-template-layout34 ul.fxt-socials li.fxt-apple a {
        color: #132133;
    }

    .fxt-template-layout34 ul.fxt-socials li.fxt-facebook a {
        color: #3b5998;
    }
    </style>

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
    <section class="fxt-template-animation fxt-template-layout34" data-bg-image="{{asset('website/assets/images/img/elements/bg1.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="fxt-column-wrap justify-content-between">
                        <div class="fxt-animated-img">
                            <div class="fxt-transformX-L-50 fxt-transition-delay-10">
                                <img src="{{asset('website/assets/images/img/figure/bg34-1.png')}}" alt="Animated Image">
                            </div>
                        </div>
                        <div class="fxt-transformX-L-50 fxt-transition-delay-5">
                            <div class="fxt-middle-content">
                                <h1 class="fxt-main-title">Sign Up to Rechage Direct</h1>
                                <div class="fxt-switcher-description1">If you have an account You can<a href="{{route('login')}}" class="fxt-switcher-text ms-2">Sign In</a></div>
                            </div>
                        </div>
                        <div class="fxt-transformX-L-50 fxt-transition-delay-7">
                            <div class="fxt-qr-code">
                                <img src="{{asset('website/assets/images/img/elements/qr-register-34.png')}}" alt="QR">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="fxt-column-wrap justify-content-center">
                        <div class="fxt-form">
                            <form method="POST">
                                <div class="form-group">
                                    <input type="text" id="f_name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off" autofocus placeholder="UserName" >

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus placeholder="Enter Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="off" placeholder="********" required="required">
                                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="********" required="required" autocomplete="off">
                                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="fxt-checkbox-box">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1" class="ps-4">I agree with <a
                                        class="terms-link" href="#">Terms</a> and <a class="terms-link" href="#">Privacy Policy</a></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="fxt-btn-fill">Sign Up</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
