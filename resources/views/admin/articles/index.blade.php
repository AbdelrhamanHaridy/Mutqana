@extends('admin.layouts.app')

@section('titleDashboard')
    المقالات  /
@endsection

@section('content')
    <div class="page-header border-bottom-0">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline border-0">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('admin.index')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                    @if($request->keyword)
                        <a href="{{route('articles.index')}}" class="breadcrumb-item"><i class="icon-file-text3"></i> المقالات </a>
                        <span class="breadcrumb-item active">{{$request->keyword}}</span>
                    @else
                        <span class="breadcrumb-item active"><i class="icon-file-text3"></i> المقالات </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="page-header-content header-elements-md-inline">

            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> - المقالات</h4>
            </div>

            <div class="header-elements d-none mb-3 mb-md-0">
                <div class="d-flex justify-content-center">
                    <a href="{{route('articles.create')}}" class="btn btn-link btn-float text-default"><i class="icon-plus22 text-indigo-400"></i><span>إضافة مقالة جديدة</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Search field -->
    <div class="card">
        <div class="card-body">
            <h5 class="mb-3">إبحث في المقالت</h5>

            <form action="" method="get">
                <div class="input-group mb-3">
                    <div class="form-group-feedback form-group-feedback-left">
                        <input type="text" class="form-control form-control-lg" name="keyword" value="{{Request::old('keyword') ? Request::old('keyword') : $request->keyword}}" placeholder="أ,ي">
                        <div class="form-control-feedback form-control-feedback-lg">
                            <i class="icon-search4 text-muted"></i>
                        </div>
                    </div>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary btn-lg">بحث</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /search field -->
    @if (count($articles) == 0)

        <div class="alert alert-info alert-styled-left alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            <span class="font-weight-semibold">لا توجد بيانات!</span>  عليك بإنشاء مقالات اولا من  <a href="{{route('articles.create')}}" class="alert-link">هنا</a>.
        </div>
    @endif
    <!-- Content area -->
    <div class="content">

        <!-- Post grid -->
        <div class="row">
            @foreach($articles as $article)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-img-actions mb-3">
                            <img class="card-img img-fluid" src="{{$article->photo}}" alt="{{$article->photo}}">
                            <div class="card-img-actions-overlay card-img">
                                <a href="{{route('articles.show',$article->id)}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                    <i class="icon-link"></i>
                                </a>
                            </div>
                        </div>

                        <h5 class="font-weight-semibold mb-1">
                            <a href="{{route('articles.show',$article->id)}}" class="text-default">{{$article->title}}</a>
                        </h5>

                        <ul class="list-inline list-inline-dotted text-muted mb-3">
                            <li class="list-inline-item">من خلال <a href="javascript:void(0);" class="text-muted">{{optional($article->user)->name}}</a></li>
                            <li class="list-inline-item" title="{{$article->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a')}}">{{$article->created_at->format('F jS ,Y')}}</li>
                        </ul>

                    </div>

                    <div class="card-footer d-flex">
                        <a href="{{route('articles.show',$article->id)}}" class="ml-auto">مشاهدة أكثر<i class="icon-arrow-left13 ml-2"></i></a>
                    </div>
                </div>

            </div>
            @endforeach
        </div><!-- /post grid -->
        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-3 mb-3">
            <ul class="pagination shadow-1">
                {!! $articles->render() !!}
            </ul>
        </div><!-- /pagination -->
    </div><!-- /content area -->
@endsection
