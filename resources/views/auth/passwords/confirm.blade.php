@extends('layouts.app')

@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>تأكيد كلمة المرور</h1>
                <ul>
                    <li>
                        <a href="{{route('home')}}">
                            الرئيسية
                        </a>
                    </li>
                    <li class="active">تأكيد كلمة المرور</li>
                </ul>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="{{asset('website/assets/images/page-title-shape-1.png')}}" alt="Image">
        </div>
        <div class="shape shape-2">
            <img src="{{asset('website/assets/images/page-title-shape-2.png')}}" alt="Image">
        </div>
    </div>

    <section class="user-area log-in-area ptb-100">
        <div class="container">
            <div class="user-form-content">
                <h2>{{ __('يرجى تأكيد كلمة المرور الخاصة بك قبل المتابعة.') }}</h2>
                <form method="POST" action="{{ route('password.confirm') }}" class="user-form">
                    @csrf
                    <div class="row">

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
                            <button type="submit" class="default-btn">
                                {{ __('تأكيد كلمة المرور') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('نسيت رقمك السري؟') }}
                                </a>
                            @endif
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
