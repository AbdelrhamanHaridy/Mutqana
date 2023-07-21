@extends('layouts.app')

@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>إعادة تعيين كلمة المرور</h1>
                <ul>
                    <li>
                        <a href="{{route('home')}}">
                            الرئيسية
                        </a>
                    </li>
                    <li class="active">إعادة تعيين كلمة المرور</li>
                </ul>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="{{asset('website/assets/images/page-title-shape-1.png')}}" alt="إعادة تعيين كلمة المرور">
        </div>
        <div class="shape shape-2">
            <img src="{{asset('website/assets/images/page-title-shape-2.png')}}" alt="إعادة تعيين كلمة المرور">
        </div>
    </div>

    <section class="user-area log-in-area ptb-100">
        <div class="container">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="user-form-content">
                <h2>{{ __('إرسال رابط إعادة تعيين كلمة المرور') }}</h2>
                <form method="POST" action="{{ route('password.email') }}" class="user-form">
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

                        <div class="col-4">
                            <button type="submit" class="default-btn">
                                {{ __('إرسال') }}
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
