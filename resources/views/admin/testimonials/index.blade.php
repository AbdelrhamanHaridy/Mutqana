@extends('admin.layouts.app')

@section('titleDashboard')
    الشهادات والتوصيات /
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
                        <a href="{{route('testimonials.index')}}" class="breadcrumb-item"><i class="icon-comment-discussion"></i> الشهادات والتوصيات </a>
                        <span class="breadcrumb-item active">{{$request->keyword}}</span>
                    @else
                        <span class="breadcrumb-item active"><i class="icon-comment-discussion"></i> الشهادات والتوصيات </span>
                    @endif
                </div>
            </div>
        </div>


        <div class="page-header-content header-elements-md-inline">

            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> - الشهادات والتوصيات</h4>
            </div>

            <div class="header-elements d-none mb-3 mb-md-0">
                <div class="d-flex justify-content-center">
                    <a href="{{route('testimonials.create')}}" class="btn btn-link btn-float text-default">
                        <i class="icon-plus22 text-indigo-400"></i>
                        <span>إضافة شهادات  جديدة</span>
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
                <h5 class="mb-3">إبحث في الشهادات والتوصيات</h5>

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
                        <h5 class="card-title">جميع الشهادات والتوصيات بالموقع</h5>
                    </div>
                    <table class="table datatable-button-print-rows">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>الاسم</th>
                            <th>المحتوي</th>
                            <th>من خلال</th>
                            <th>تاريخ الإضافة</th>
                            <th>الحالة</th>
                            <th class="text-center">إجراءات</th>
                        </tr>
                        </thead>
                        @if (count($testimonials) == 0)

                        <div class="alert alert-info alert-styled-left alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                            <span class="font-weight-semibold">لا توجد بيانات!</span>  عليك بلإنشاء اولا من  <a href="{{route('testimonials.create')}}" class="alert-link">هنا</a>.
                        </div>
                        @endif
                        <tbody>

                        @foreach($testimonials as $testimony)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$testimony->name}}</td>
                            <td>{!!  \Illuminate\Support\Str::limit($testimony->content, $limit = 30, $end = '....' ) !!}</td>
                            <td>{{optional($testimony->user)->name}}</td>
                            <td title="{{$testimony->created_at->format('H:i')}}">{{$testimony->created_at->format('Y-m-d')}}</td>
                            <td>
                                @if ($testimony->status == 1)
                                    <span class="badge badge-success">نشط</span>
                                @elseif ($testimony->status == 0)
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
                                            <a href="{{route('testimonials.edit',$testimony->id)}}" class="dropdown-item"><i class="icon-pencil7"></i> تعديل {{$testimony->name}}</a>
                                            {!! Form::open([
                                                 'action' => ['App\Http\Controllers\Admin\TestimonyController@destroy',$testimony->id],
                                                 'method' => 'delete'
                                             ])!!}
                                            <button class="dropdown-item" onclick="return confirm('هل أنت متأكد من حذف  {{$testimony->name}} ؟');"><i class="icon-trash-alt" ></i> حذف {{$testimony->name}}</button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-3 mb-3">
                        <ul class="pagination shadow-1">
                            {!! $testimonials->render() !!}
                        </ul>
                    </div><!-- /pagination -->
                </div><!-- /custom handle -->
            </div>
        </div><!-- /collapsible lists -->
    </div><!-- /content area -->
@endsection
