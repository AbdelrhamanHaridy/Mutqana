@extends('layouts.app')

@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>التسجيل</h1>
                <ul>
                    <li>
                        <a href="{{route('home')}}">
                            الرئيسية
                        </a>
                    </li>
                    <li class="active">تسجيل جديد في القبطان</li>
                </ul>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="{{asset('website/assets/images/page-title-shape-1.png')}}" alt="تسجيل جديد في القبطان">
        </div>
        <div class="shape shape-2">
            <img src="{{asset('website/assets/images/page-title-shape-2.png')}}" alt="تسجيل جديد في القبطان">
        </div>
    </div>

    <section class="user-area log-in-area ptb-100">
        <div class="container">
            <div class="user-form-content">
                <h2>أملئ بياناتك بطريقة صحيحة</h2>
                <form method="POST" action="{{ route('register') }}" class="user-form">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-right">الأسم</label>
                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

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
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __(' كلمة المرور') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تأكيد كلمة المرور') }}</label>

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="login-action" dir="ltr">
                                <span class="forgot-login text-center" dir="rtl">
                                    بالنقر التسجيل، فإنك توافق على <a href="{{route('privacy_policy')}}">الشروط وسياسة الخصوصية</a> الخاصة بنا. ويمكنك إلغاء الاشتراك في أي وقت.
                                </span>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="default-btn" type="submit">التسجيل</button>
                        </div>
                        <div class="col-12">
                            <p class="create">هل لديك حساب؟ <a href="{{route('login')}}">تسجيل الدخول</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
