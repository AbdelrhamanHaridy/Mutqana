@extends('admin.layouts.app')

@section('titleDashboard')
     المستخدمين /
@endsection
@section('head1')

    <!-- Theme JS files -->
    <script src="{{asset('admin/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>

    <script src="{{asset('admin/global_assets/js/demo_pages/datatables_basic.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- /theme JS files -->
@endsection

@section('content')
    <div class="page-header border-bottom-0">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline border-0">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('admin.index')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                    <span class="breadcrumb-item active">المستخدمين</span>
                </div>
            </div>
        </div>

        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> - المستخدمين</h4>
            </div>

            <div class="header-elements d-none mb-3 mb-md-0">
                <div class="d-flex justify-content-center">
                    <a href="{{route('users.create')}}" class="btn btn-link btn-float text-default">
                        <i class="icon-user-plus text-indigo-400"></i>
                        <span>إضافة مستخدم جديد</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Content area -->
    <div class="content">
        <!-- Search field -->
        <div class="card">
            <div class="card-body">
                <h5 class="mb-3">إبحث في المستخدمين</h5>

                <form action="" method="get">
                    <div class="input-group mb-3">
                        <div class="form-group-feedback form-group-feedback-left">
                            <input type="text" class="form-control form-control-lg" name="keyword" value="" placeholder="إترك بحثك هنا وليكن اسم المستخدم او البريد الإلكتروني">
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

        <!-- Collapsible lists -->
        @include('admin.layouts.messages.message')
        <div class="row">
            <div class="col-md-12">
                <!-- Custom handle -->
                <div class="card ">
                    <div class="card-header header-elements-inline ">
                        <h5 class="card-title">جميع المستخدمين بالموقع</h5>
                    </div>
                        <div class="row">
                            @foreach($users as $user)
                            <div class="col-xl-3 col-sm-6 ">
                                <div class="card bg-slate-600" style="background-image: url('admin/global_assets/images/backgrounds/panel_bg.png'); background-size: contain;">
                                    <div class="card-body text-center">
                                        <div class="card-img-actions d-inline-block mb-3">
                                            <img class="img-fluid rounded-circle" src="{{$user->photo}}" width="170" height="170" alt="">
                                            <div class="card-img-actions-overlay card-img rounded-circle">
                                                <div class="ml-3 align-self-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                            <div class="dropdown-menu">
                                                                {!! Form::open(array(
                                                                    'style' => 'display: inline-block;',
                                                                    'method' => 'DELETE',
                                                                    'onsubmit' => "return confirm('".trans("هل أنت متأكد من حذف $user->name ؟")."');",
                                                                    'route' => ['users.destroy', $user->id]))
                                                               !!}

                                                                <button class="dropdown-item"><i class="icon-user-cancel" style="color: #fa0000"></i> حذف المستخدم {{$user->name}}</button>
                                                                {!! Form::close() !!}
                                                                <a href="{{route('users.edit',$user->id)}}" class="dropdown-item"><i class="icon-pencil5" style="color: #87caff"></i>  تعديل المستخدم {{$user->name}}</a>
                                                           </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a href="javascript:void(0);" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                                    <i class="icon-link"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <h6 class="font-weight-semibold mb-0">{{$user->name}}</h6>
                                        <span class="d-block opacity-75">{{$user->email}}</span>

                                        <div class="list-icons list-icons-extended mt-3">
                                            <a href="https://www.facebook.com/{{$user->facebook}}" class="list-icons-item text-white" data-popup="tooltip" title="Facebook" data-container="body"><i class="icon-facebook"></i></a>
                                            <a href="https://twitter.com/{{$user->twitter}}" class="list-icons-item text-white" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
                                            <a href="https://instagram.com/{{$user->instagram}}" class="list-icons-item text-white" data-popup="tooltip" title="Instagram" data-container="body"><i class="icon-instagram"></i></a>
                                            <a href="https://www.linkedin.com/{{$user->linkedin}}" class="list-icons-item text-white" data-popup="tooltip" title="Linkedin" data-container="body"><i class="icon-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-center">
                            {!! $users->render() !!}
                        </div>
                </div><!-- /custom handle -->
            </div>
        </div><!-- /collapsible lists -->
    </div><!-- /content area -->

@endsection
