@extends('admin.layouts.app')
@inject('model', 'App\Models\User')

@section('titleDashboard')
    إضافة مستخدم جديد /
@endsection
@section('head1')
    <script src="{{asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
@endsection

@section('head2')

    <script src="{{asset('admin/global_assets/js/demo_pages/form_checkboxes_radios.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/form_inputs.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/form_select2.js')}}"></script>

@endsection
@section('content')
    <div class="page-header border-bottom-0">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline border-0">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('admin.index')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                    <a href="{{route('users.index')}}" class="breadcrumb-item"><i class="icon-users4 mr-2"></i> المستخدمين</a>
                    <span class="breadcrumb-item active">إضافة مستخدم جديد</span>
                </div>
            </div>
        </div>

        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> - إضافة مستخدم جديد</h4>
            </div>

        </div>
    </div>
    <!-- Content area -->
    <div class="content">

        <!-- Form validation -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">أنشئ مستخدم جديد</h5>
            </div>

            <div class="card-body">
                <p class="mb-4">أملء النموذج وتحقق جيداً من البيانات</p>
                @include('admin.layouts.partials.validation-errors')

                <form class="form-validate-jquery" action="{{route('users.store')}}" method="post">
                    @csrf
                    <fieldset class="mb-3">
                        @include('admin.users.form')
                    </fieldset>


                    <div class="d-flex justify-content-end align-items-center">
                        <button type="reset" class="btn btn-light" id="reset">إعاداة الإدخال <i class="icon-reload-alt ml-2"></i></button>
                        <button type="submit" class="btn btn-primary ml-3" >إضافة المستخدم <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form validation -->

    </div>
    <!-- /content area -->
@endsection
