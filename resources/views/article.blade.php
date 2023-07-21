@extends('layouts.app')


@section('content')
  <!-- Banner  -->
  <div class="section--sm section--top bg-base">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <ul class="list list-row align-items-center justify-content-center mb-5">
            <li title="{{optional($article->category)->name}}">
              <a href="#" class="bttn bttn--rounded bttn--accent bttn-md"> {{optional($article->category)->name}} </a>
            </li>
            <li title="{{$article->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a')}}">
              <span class="clr-light">{{$article->created_at->format('F jS ,Y')}}</span>
            </li>
          </ul>
          <h2 class="text-center clr-light mb-8" title="{{$article->title}}">{{$article->title}} </h2>
        </div>
        <div class="col-lg-8">
          <ul class="list list-row flex-wrap align-items-center justify-content-center justify-content-sm-between">
            <li>
              <div class="group group-sm group-row align-items-center">
                <div class="user user--xmd user-outline-base flex-shrink-0 rounded-circle border border-2 border-light">
                  <span class="user__img rounded-circle">
                    <img src="{{asset('website/assets/images/team-1.jpg')}}" alt="image" class="user__img-is">
                  </span>
                </div>
                <div class="flex-grow-1">
                  <h5 class="clr-light"> Courtney Henry </h5>
                  @foreach($article->tags as $tag)
                                            <p><a href="{{route('tags',$tag->id)}}">{{$tag->name}}</a></p>
                     @endforeach
                </div>
              </div>
            </li>
            <li>
              <ul class="list list-xs list-row justify-content-sm-end">
                <li>
                  <a href="#" class="t-link social-icon social-icon--sm social-icon--light-outline social-icon--circle">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="t-link social-icon social-icon--sm social-icon--light-outline social-icon--circle">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="t-link social-icon social-icon--sm social-icon--light-outline social-icon--circle">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="t-link social-icon social-icon--sm social-icon--light-outline social-icon--circle">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner End -->
<div class="details-body">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <img src="{{$article->photo}}" alt="{{$article->title}}" class="img-fluid rounded-4">
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="row g-6 justify-content-xxl-between">
        <div class="col-lg-8 col-xxl-7">
        <p title="{!! $article->content !!}">{!! $article->content !!}</p>
        </div>
        <div class="col-lg-4">
          <div class="px-8 py-15 rounded-4 bg-base">
            <img src="{{asset('website/assets/images/icon-72.png')}}" alt="image" class="img-fluid">
            <h4 class="my-5 clr-light"> Sign up for our newsletter </h4>
            <p class="mb-8 clr-light"> Need more information?Subscribe to Newsletter & Get Update and News </p>
            <input type="email" class="form-control booking-form__input placeholder-clr mb-5"
              placeholder="Enter Your Email">
            <a href="#" class="bttn bttn-pill bttn-md bttn--light-accent align-items-center fw-md w-100 clr-dark">
              Subscribe Now! </a>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>{{$article->title}}</h1>
                <ul>
                    <li><a href="{{route('home')}}">الرئيسية</a></li>
                    <li class="active">{{$article->title}}</li>
                </ul>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="{{$article->photo}}" alt="{{$article->title}}">
        </div>
        <div class="shape shape-2">
            <img src="{{$article->photo}}" alt="{{$article->title}}">
        </div>
    </div> -->

    <!-- <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-top-content">
                        <div class="blog-details-content content-1">
                            <div class="blog-details-img">
                                <img src="{{$article->photo}}" alt="{{$article->title}}">
                            </div>
                        </div>
                        <div class="blog-details-content content-2">
                            <ul>
                                <li title="{{$article->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a')}}"><i class="ri-calendar-line"></i>{{$article->created_at->format('F jS ,Y')}}</li>
                                <li title="{{optional($article->category)->name}}">{{optional($article->category)->name}}</li>
                            </ul>
                        </div>
                        <div class="blog-details-content content-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul>
                                        <li class="tags"><span title="علامات المقالات:">علامات المقالات:</span>
                                        </li>
                                        @foreach($article->tags as $tag)
                                            <li><a href="{{route('tags',$tag->id)}}">{{$tag->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-details-content content-3">
                            <h2 title="{{$article->title}}">{{$article->title}}</h2>
                            <p title="{!! $article->content !!}">{!! $article->content !!}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->
@endsection
