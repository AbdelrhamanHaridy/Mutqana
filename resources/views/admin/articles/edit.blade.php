@extends('admin.layouts.app')

@section('titleDashboard')
      تعديل مقال {{$model->title}} /

@endsection
@section('head1')
    <script src="{{asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/ui/prism.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/tags/tagsinput.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/tags/tokenfield.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js')}}"></script>
@endsection
@section('head2')
    <script src="{{asset('admin/global_assets/js/demo_pages/form_inputs.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/editor_summernote.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/form_tags_input.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/form_select2.js')}}"></script>
@endsection


@section('content')
    <div class="page-header border-bottom-0">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline border-0">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('admin.index')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                    <a href="{{route('articles.index')}}" class="breadcrumb-item"><i class="icon-file-text3"></i> المقالات </a>
                    <span class="breadcrumb-item active">  تعديل مقال {{$model->title}}</span>
                </div>
            </div>
            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="javascript:void(0);" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown"><i class="icon-gear mr-2"></i>الإعدادات</a>

                        <div class="dropdown-menu">
                            <a href="{{route('articles.create')}}" class="dropdown-item"><i class="icon-file-plus2"></i> إضافة مقال</a>
                            <a href="{{route('articles.edit',$model->id)}}" class="dropdown-item"><i class="icon-pencil7 text-indigo-400"></i>التعديل على المقال</a>
                            {!! Form::open([
                                 'action' => ['App\Http\Controllers\Admin\ArticleController@destroy',$model->id],
                                 'method' => 'delete'
                             ])!!}
                            <button href="#" class="dropdown-item"><i class="icon-trash-alt"></i> حذف</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> -   تعديل مقال {{$model->title}}</h4>
            </div>
        </div>
    </div>
    <!-- Content area -->
    <div class="content">
        <!-- Form -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title"> التعديل على مقال {{$model->title}}</h5>
            </div>
            <div class="card-body">
                <p class="mb-4">تحقق جيداً من البيانات</p>
                @include('admin.layouts.partials.validation-errors')
                <form class="form-validate-jquery" action="{{route('articles.update',$model->id)}}" method="POST" files="true" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <fieldset class="mb-3">
                        @include('admin.articles.form')
                    </fieldset>

                    <div class="d-flex justify-content-end align-items-center">
                        <button type="submit" class="btn btn-primary ml-3" > تعديل مقال {{$model->title}} <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div><!-- /form -->
    </div><!-- /content area -->
@endsection
