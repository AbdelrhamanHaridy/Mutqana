@extends('admin.layouts.app')

@section('titleDashboard')
      تعديل القسم {{$model->name}} /

@endsection
@section('head1')
    <script src="{{asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
@endsection

@section('head2')
    <script src="{{asset('admin/global_assets/js/demo_pages/form_inputs.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/form_select2.js')}}"></script>
@endsection


@section('content')

    <div class="page-header border-bottom-0">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline border-0">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('admin.index')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                    <a href="{{route('categories.index')}}" class="breadcrumb-item"><i class="icon-grid6 mr-2"></i> الأقسام</a>
                    <span class="breadcrumb-item active">  تعديل القسم {{$model->name}}</span>
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
                            <a href="{{route('categories.create')}}" class="dropdown-item"><i class="icon-grid6"></i>إضافة قسم جديد</a>
                            <a href="{{route('categories.edit',$model->id)}}" class="dropdown-item"><i class="icon-pencil5"></i>تعديل القسم</a>
                            {!! Form::open([
                                'style' => 'display: inline-block;',
                                'method' => 'DELETE',
                                'onsubmit' => "return confirm('".trans("هل أنت متأكد من حذف $model->name ؟")."');",
                                'route' => ['categories.destroy', $model->id]])
                            !!}
                            <button class="dropdown-item"><i class="icon-trash-alt" style="color: #fa0000"></i>حذف القسم</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> -   تعديل القسم "{{$model->name}}"</h4>

            </div>

        </div>
    </div>
    <div class="content">

        <!-- Form validation -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title"> التعديل على القسم {{$model->name}}</h5>
            </div>

            <div class="card-body">
                <p class="mb-4"> تحقق جيداً من البيانات</p>
                @include('admin.layouts.partials.validation-errors')

                <form class="form-validate-jquery" action="{{route('categories.update',$model->id)}}" method="POST" files="true" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}

                    <fieldset class="mb-3">
                        @include('admin.categories.form')
                    </fieldset>

                    <div class="d-flex justify-content-end align-items-center">
                        <button type="submit" class="btn btn-primary ml-3" > تعديل القسم {{$model->name}} <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form validation -->

    </div>
    <!-- /content area -->
@endsection
