@extends('admin.layouts.app')

@section('titleDashboard')
    الأقسام /
@endsection
@section('head1')
    <script src="{{asset('admin/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/tables/datatables/extensions/buttons.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/tables/datatables/extensions/select.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
@endsection

@section('head2')
    <script src="{{asset('admin/global_assets/js/demo_pages/datatables_extension_buttons_print.js')}}"></script>
@endsection

@section('content')
    <div class="page-header border-bottom-0">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline border-0">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('admin.index')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                    @if($request->keyword)
                        <a href="{{route('categories.index')}}" class="breadcrumb-item"><i class="icon-grid6 mr-2"></i> الأقسام</a>
                    @endif
                    <span class="breadcrumb-item active">@if($request->keyword){{Request::old('keyword') ? Request::old('keyword') : $request->keyword}}
                        @else
                            <span class="breadcrumb-item active"><i class="icon-grid6 mr-2"></i> الأقسام </span>
                        @endif
                    </span>
                </div>
            </div>
        </div>


        <div class="page-header-content header-elements-md-inline">

            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> @if($request->keyword) - {{Request::old('keyword') ? Request::old('keyword') : $request->keyword}} @else - الأقسام @endif</h4>
            </div>

            <div class="header-elements d-none mb-3 mb-md-0">
                <div class="d-flex justify-content-center">
                    <a href="{{route('categories.create')}}" class="btn btn-link btn-float text-default">
                        <i class="icon-plus22 text-indigo-400"></i>
                        <span>إضافة أقسام جديدة</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <!-- Search field -->
        <div class="card">
            <div class="card-body">
                <h5 class="mb-3">إبحث في الأقسام</h5>

                <form action="#" method="get">
                    <div class="input-group mb-3">
                        <div class="form-group-feedback form-group-feedback-left">
                            <input type="text" class="form-control form-control-lg" name="keyword" value="{{Request::old('keyword') ? Request::old('keyword') : $request->keyword}}" placeholder="إبحث هنا !">
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
        </div><!-- /search field -->
        <!-- Collapsible lists -->
        @include('admin.layouts.messages.message')
        <div class="row">
            <div class="col-md-12">
                <!-- Custom handle -->
                <div class="card ">
                    <div class="card-header header-elements-inline ">
                        <h5 class="card-title">جميع الأقسام بالموقع</h5>
                    </div>
                    <table class="table datatable-button-print-rows">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th> القسم</th>
                            <th> الأيقونة</th>
                            <th>من خلال</th>
                            <th>تاريخ الإضافة</th>
                            <th>حالة الإضافة</th>
                            <th>إجراءات</th>
                        </tr>
                        </thead>
                        @if (count($categories) == 0)

                        <div class="alert alert-info alert-styled-left alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                            <span class="font-weight-semibold">لا توجد بيانات!</span>  عليك بإنشاء أقسام اولا من  <a href="{{route('categories.create')}}" class="alert-link">هنا</a>.
                        </div>
                        @endif
                        <tbody>

                        @foreach($categories as $category)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$category->name}}</td>

                            <td>{{$category->icon}}</td>
                            <td>{{optional($category->user)->name}}</td>
                            <td title="{{$category->created_at->format('H:i')}}">{{$category->created_at->format('Y-m-d')}}</td>
                            <td>
                                @if ($category->status == 1)
                                <span class="badge badge-success">نشط</span>
                                @elseif ($category->status == 0)
                                <span class="badge badge-secondary">معلق</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="javascript: void(0);" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu">
                                            <a href="{{route('categories.edit',$category->id)}}" class="dropdown-item"><i class="icon-pencil7"></i> تعديل قسم {{$category->name}}</a>
                                            {!! Form::open([
                                                 'action' => ['App\Http\Controllers\Admin\CategoryController@destroy',$category->id],
                                                 'method' => 'delete'
                                             ])!!}
                                            <button class="dropdown-item" onclick="return confirm('هل أنت متأكد من حذف قسم {{$category->name}} ؟');"><i class="icon-trash-alt" ></i> حذف قسم {{$category->name}}</button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /custom handle -->
                <div class="d-flex justify-content-center mt-3 mb-3">
                    <ul class="pagination shadow-1">
                        {!! $categories->render() !!}
                    </ul>
                </div>
            </div>
        </div><!-- /collapsible lists -->
    </div><!-- /content area -->
@endsection
