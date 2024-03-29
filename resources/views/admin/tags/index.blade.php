@extends('admin.layouts.app')

@section('titleDashboard')
    العلامات /
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
                        <a href="{{route('tags.index')}}" class="breadcrumb-item"><i class="icon-price-tag2"></i> العلامات </a>
                        <span class="breadcrumb-item active">{{$request->keyword}}</span>
                    @else
                        <span class="breadcrumb-item active"><i class="icon-price-tag2"></i> العلامات </span>
                    @endif

                </div>
            </div>
        </div>


        <div class="page-header-content header-elements-md-inline">

            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> - العلامات</h4>
            </div>

            <div class="header-elements d-none mb-3 mb-md-0">
                <div class="d-flex justify-content-center">
                    <a href="{{route('tags.create')}}" class="btn btn-link btn-float text-default">
                        <i class="icon-plus22 text-indigo-400"></i>
                        <span>إضافة علامات جديدة</span>
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
                <h5 class="mb-3">إبحث في العلامات</h5>

                <form action="#" method="get">
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
        </div><!-- /search field -->
        <!-- Collapsible lists -->
        @include('admin.layouts.messages.message')
        <div class="row">
            <div class="col-md-12">
                <!-- Custom handle -->
                <div class="card ">
                    <div class="card-header header-elements-inline ">
                        <h5 class="card-title">جميع العلامات بالموقع</h5>
                    </div>
                    <table class="table datatable-button-print-rows">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>إسم العلامات</th>
                            <th>من خلال</th>
                            <th>تاريخ الإضافة</th>
                            <th class="text-center">إجراءات</th>
                        </tr>
                        </thead>
                        @if (count($tags) == 0)
                        <div class="alert alert-info alert-styled-left alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                            <span class="font-weight-semibold">لا توجد بيانات!</span>  عليك بإنشاء علامات اولا من  <a href="{{route('tags.create')}}" class="alert-link">هنا</a>.
                        </div>
                        @endif
                        <tbody>

                        @foreach($tags as $tag)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$tag->name}}</td>
                            <td>{{optional($tag->user)->name}}</td>
                            <td title="{{$tag->created_at->format('H:i')}}">{{$tag->created_at->format('Y-m-d')}}</td>

                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="javascript: void(0);" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu">
                                            <a href="{{route('tags.edit',$tag->id)}}" class="dropdown-item"><i class="icon-pencil7"></i> تعديل {{$tag->name}}</a>
                                            {!! Form::open([
                                                 'action' => ['App\Http\Controllers\Admin\TagController@destroy',$tag->id],
                                                 'method' => 'delete'
                                             ])!!}
                                            <button class="dropdown-item" onclick="return confirm('هل أنت متأكد من حذف  {{$tag->name}} ؟');"><i class="icon-trash-alt" ></i> حذف {{$tag->name}}</button>
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
            </div>
        </div><!-- /collapsible lists -->
    </div><!-- /content area -->
@endsection
