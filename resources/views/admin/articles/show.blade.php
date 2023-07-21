@extends('admin.layouts.app')

@section('titleDashboard')
        {{$articles->title}} /
@endsection

@section('head1')
    <script src="{{asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/media/fancybox.min.js')}}"></script>
@endsection

@section('head2')
    <script src="{{asset('admin/global_assets/js/demo_pages/blog_single.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/components_modals.js')}}"></script>
@endsection

@section('content')
    <div class="page-header border-bottom-0">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline border-0">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('admin.index')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                    <a href="{{route('articles.index')}}" class="breadcrumb-item"><i class="icon-file-text3"></i> المقالات </a>
                    <span class="breadcrumb-item active">{{$articles->title}}</span>
                </div>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="javascript:void(0);" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            الإعدادات
                        </a>

                        <div class="dropdown-menu">
                            <a href="{{route('articles.create')}}" class="dropdown-item"><i class="icon-file-plus2"></i> إضافة مقال</a>
                            <a href="{{route('articles.edit',$articles->id)}}" class="dropdown-item"><i class="icon-pencil7 text-indigo-400"></i>التعديل على المقال</a>
                            {!! Form::open([
                                 'action' => ['App\Http\Controllers\Admin\ArticleController@destroy',$articles->id],
                                 'method' => 'delete'
                             ])!!}
                            <button href="javascript:void(0);" class="dropdown-item"><i class="icon-trash-alt"></i> حذف</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> - {{$articles->title}}</h4>
            </div>
        </div>
    </div>
    <!-- Content area -->
    <div class="content pt-0">
        <!-- Inner container -->
        <div class="d-flex align-items-start flex-column flex-md-row">
            <!-- Left content -->
            <div class="w-100 overflow-auto order-2 order-md-1">
                <!-- Post -->
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="mb-3 text-center">
                                <a href="javascript:void(0);" class="d-inline-block">
                                    <img src="{{$articles->photo}}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <hr>
                            <h1 >المقال بالعربية</h1>
                            <hr>
                            <h4 class="font-weight-semibold mb-1">
                                <a href="javascript:void(0);" class="text-default">{{$articles->title}}</a>
                            </h4>

                            <ul class="list-inline list-inline-dotted text-muted mb-3">
                                <li class="list-inline-item">من خلال <a href="javascript:void(0);" class="text-muted">{{optional($articles->user)->name}}</a></li>
                                <li class="list-inline-item" title="{{$articles->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a')}}">{{$articles->created_at->format('F jS ,Y')}}</li>
                            </ul>

                            <div class="mb-3">
                                {!! $articles->content !!}
                            </div>
                        </div>
                    </div>
                </div><!-- /post -->

                <!-- About author -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">نبذة عن الكاتب</h6>
                    </div>

                    <div class="media card-body flex-column flex-md-row m-0">
                        <div class="mr-md-3 mb-2 mb-md-0">
                            <a href="javascript:void(0);">
                                <img src="{{asset('admin/global_assets/images/placeholders/placeholder.jpg')}}" class="rounded-circle" width="64" height="64" alt="">
                            </a>
                        </div>

                        <div class="media-body">
                            <h6 class="media-title font-weight-semibold">{{$articles->user->name}}</h6>
                            <p>{{$articles->user->bio}}</p>

                        </div>
                    </div>
                </div><!-- /about author -->
            </div><!-- /left content -->

            <!-- Right sidebar component -->
            <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">
                <!-- Sidebar content -->
                <div class="sidebar-content">
                    <!-- details -->
                    <div class="card">
                        <div class="card-header bg-transparent border-bottom header-elements-inline">
                            <span class="card-title font-weight-semibold">تفاصيل</span>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="nav nav-sidebar my-2">
                                @if(optional($articles->category)->id)
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="icon-grid6"></i>
                                            {{optional($articles->category)->name}}
                                        </a>
                                    </li>
                                @else
                                    <li class="nav-item nav-link">
                                        <i class="icon-grid6"></i>
                                        لا يوجد أقسام
                                    </li>
                                @endif
                            </div>
                        </div>
                    </div><!-- /details -->

                    <!-- Recent articles -->
                    <div class="card">
                        <div class="card-header bg-transparent border-bottom header-elements-inline">
                            <span class="card-title font-weight-semibold">المقالات الاحدث</span>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="media-list">
                                @foreach($recentArticles as $recentArticle)
                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{$recentArticle->photo}}" class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="{{route('articles.show',$recentArticle->id)}}" class="media-title">
                                            <div class="font-weight-semibold">{{$recentArticle->title}}</div>
                                        </a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- /recent articles -->

                    <!-- Tags -->
                    <div class="card">
                        <div class="card-header bg-transparent header-elements-inline">
                            <span class="card-title font-weight-semibold">العلامات</span>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pb-2">
                            <ul class="list-inline list-inline-condensed mb-0">
                                @foreach($articles->tags as $tag)
                                <li class="list-inline-item">
                                    <div>
                                        <span class="badge badge-light badge-striped badge-striped-left border-left-pink mb-2">{{$tag->name}}</span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- /tags -->
                </div><!-- /sidebar content -->
            </div><!-- /right sidebar component -->
        </div><!-- /inner container -->
    </div><!-- /content area -->

@endsection
