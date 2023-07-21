@extends('layouts.app')

@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1 title="المقالات">المقالات</h1>
                <ul>
                    <li><a href="{{route('home')}}" title="الرئيسية">الرئيسية</a></li>
                    @if($request->keyword)
                        <li><a href="{{route('categories',$tags->id)}}" title="{{$tags->name}}">{{$tags->name}}</a></li>
                        <li class="active" title="{{$request->keyword}}">{{$request->keyword}}</li>
                    @else
                        <li class="active" title="{{$tags->name}}">{{$tags->name}}</li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="{{asset('website/assets/images/page-title-shape-1.png')}}" alt="المقالات">
        </div>
        <div class="shape shape-2">
            <img src="{{asset('website/assets/images/page-title-shape-2.png')}}" alt="المقالات">
        </div>
    </div>
    <section class="blog-page-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if(count($tags->articles))
                        <div class="row">
                            @foreach($tags->articles as $article)
                                <div class="col-lg-12">
                                    <div class="single-blog-box">
                                        <a href="{{route('article',$article->id)}}"><img src="{{$article->photo}}" alt="{{$article->title}}"></a>
                                        <ul>
                                            <li title="{{$article->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a')}}"><i class="ri-calendar-line"></i>{{$article->created_at->format('F jS ,Y')}}</li>
                                            <a href="{{route('categories',optional($article->category)->id)}}"><li title="{{optional($article->category)->name}}">{{optional($article->category)->name}}</li></a>
                                        </ul>
                                        <h2><a href="{{route('article',$article->id)}}" title="{{$article->title}}">{{$article->title}}</a></h2>
                                        <a href="{{route('article',$article->id)}}" class="read-more">مشاهدة المزيد<i class="ri-add-circle-fill"></i></a>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    @else
                        <div class="alert alert-secondary" role="alert">
                            لا توجد مقالات
                        </div>
                    @endif
                </div>
                <div class="col-lg-4">
                    <div class="widget-sidebar">
                        <div class="sidebar-widget search">
                            <form action="" method="get" class="search-form">
                                <input class="form-control" name="keyword" value="{{Request::old('keyword') ? Request::old('keyword') : $request->keyword}}" placeholder="البحث ..." type="text">
                                <button class="search-button" type="submit">
                                    <i class="ri-search-line"></i>
                                </button>
                            </form>
                        </div>
                        <div class="sidebar-widget categories">
                            <h3>الأقسام</h3>
                            <ul>
                                @foreach($categoriesPopular as $category)
                                    <li>
                                        <a href="{{route('categories',$category->id)}}"> {{$category->name}} <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="sidebar-widget recent-post">
                            <h3 class="widget-title">المقالات الأعلى مشاهدة</h3>
                            <ul>
                                @foreach($articlesPopular as $article)
                                    <li>
                                        <a href="{{route('article',$article->id)}}">{{$article->title}}
                                            <img src="{{$article->photo}}" width="100" height="100" alt="{{$article->title}}">
                                        </a>
                                        <span title="{{$article->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a')}}">{{$article->created_at->format('F jS ,Y')}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
