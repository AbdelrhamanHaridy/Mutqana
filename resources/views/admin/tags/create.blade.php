@extends('admin.layouts.app')
@inject('model', 'App\Models\Tag')

@section('titleDashboard')
    إضافة علامات جديده /
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
                    <a href="{{route('tags.index')}}" class="breadcrumb-item"><i class="icon-price-tag2"></i> العلامات</a>
                    <span class="breadcrumb-item active">إضافة علامات جديدة</span>
                </div>
            </div>
        </div>

        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> - إضافة علامات جديدة</h4>
            </div>
        </div>
    </div>
    <!-- Content area -->
    <div class="content">

        <!-- Form validation -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">إضافة علامات جديدة</h5>
            </div>

            <div class="card-body">
                <p class="mb-4">أملء النموذج وتحقق جيداً من البيانات</p>
                @include('admin.layouts.partials.validation-errors')

                <form class="form-validate-jquery" action="{{route('tags.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="mb-3">
                        @include('admin.tags.form')
                    </fieldset>

                    <div class="d-flex justify-content-end align-items-center">
                        <button type="submit" class="btn btn-primary ml-3" >إضافة <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div><!-- /form validation -->
    </div><!-- /content area -->
@endsection
