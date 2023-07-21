@extends('admin.layouts.app')

@section('titleDashboard')
   {{$user->name}} |
@endsection
@section('head1')

    <script src="{{asset('admin/global_assets/js/plugins/visualization/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/ui/fullcalendar/core/main.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/ui/fullcalendar/daygrid/main.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/ui/fullcalendar/timegrid/main.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/ui/fullcalendar/interaction/main.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/user_pages_profile.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_charts/echarts/dark/bars/tornado_negative_stack.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_charts/pages/profile/dark/available_hours.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/datatables_api.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/form_checkboxes_radios.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/inputs/maxlength.min.js')}}"></script>

@endsection

@section('content')

    <div class="page-header border-bottom-0">
        <!-- Profile navigation -->
        <div class="navbar navbar-expand-lg navbar-light bg-transparent border-bottom border-light shadow-0">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-second">
                    <i class="icon-menu7 mr-2"></i>
                    Profile navigation
                </button>
            </div>


        </div>
        <!-- /profile navigation -->

        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> -{{$user->name}}</h4>
            </div>
        </div>
        @include('admin.layouts.partials.validation-errors')
        @include('admin.layouts.messages.message')
    </div>
    <!-- Content area -->
    <div class="content pt-0">

        <!-- Inner container -->
        <div class="d-flex align-items-start flex-column flex-md-row">
            <!-- Left content -->
            <div class="tab-content w-100 order-2 order-md-1">
                <!-- Profile info -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">معلومات الملف الشخصي</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="row">

                                    <div class="col-md-6">
                                        <label>الاسم</label>
                                        <input name="name" type="text" value="{{Request::old('name') ? Request::old('name') : $user->name}}" placeholder="اكتب الاسم" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>اسم المستخدم</label>
                                        <input name="username" @if($user->username == null)  @else readonly="readonly" @endif type="text" placeholder="اكتب اسم المستخدم" value="{{Request::old('username') ? Request::old('username') : $user->username}}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>البريد الألكتروني</label>
                                        <input name="email" @if($user->email == null)  @else readonly="readonly" @endif value="{{Request::old('email') ? Request::old('email') : $user->email}}" placeholder="اكتب البريد الإلكتروني" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>دولتك</label>
                                        <input name="location" type="text" value="{{Request::old('location') ? Request::old('location') : $user->location}}" placeholder="اكتب دولتك" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>هاتف #</label>
                                        <input name="phone" type="text" value="{{Request::old('phone') ? Request::old('phone') : $user->phone}}" placeholder="اكتب الهاتف" class="form-control">
                                        <span class="form-text text-muted">+99-99-9999-999</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label>تحميل صورة الملف الشخصي</label>
                                        <input name="image" type="file" class="form-input-styled" data-fouc>
                                        <span class="form-text text-muted">التنسيقات المقبولة: gif ، png ، jpg. أقصى حجم للملف 2 ميجا بايت</span>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">حفظ التغيرات </button>
                            </div>
                        </form>
                    </div>
                </div><!-- /profile info -->

                <!-- Account settings -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">إعداد الحساب</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{route('profile.update.password')}}" method="post" >
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>اسم المستخدم</label>
                                        <input value="{{Request::old('username') ? Request::old('username') : $user->username}}" @if($user->username == null)  @else readonly="readonly" @endif placeholder="اكتب اسم المستخدم" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label> كلمة السر الحالية</label>
                                        <input type="password" name="current_password" placeholder=" كلمة السر الحالية" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>كلمة السر الجديدة</label>
                                        <input type="password" name="password" placeholder="كلمة السر الجديدة" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>اعد كلمة السر </label>
                                        <input type="password" name="password_confirmation" placeholder="اعد كلمة السر " class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">حفظ التغيرات</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /account settings -->

                <!-- Start active sessions -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title"> جلسات نشطة</h5>

                    </div>

                    <table class="table datatable-selection-multiple">
                        <thead>
                        <tr>
                            <th>ip address</th>
                            <th>user_agent</th>
                            <th>payload</th>
                            <th>last activity</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($sessions as $session)
                        <tr>
                            <td>{{$session->ip_address}}</td>
                            <td>{{$session->user_agent}}</td>
                            <td>{!! Illuminate\Support\Str::limit($session->payload, $limit = 30, $end = '...' ) !!}</a></td>
                            <td><span class="badge badge-info">{{$session->last_activity}}</span></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- End active sessions -->

            </div><!-- /left content -->


            <!-- Right sidebar component -->
            <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right wmin-300 border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

                <!-- Sidebar content -->
                <div class="sidebar-content">

                    <!-- User card -->
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="card-img-actions d-inline-block mb-3">
                                <img class="img-fluid rounded-circle" src="{{$user->photo}}" width="170" height="170" alt="">

                            </div>
                            <h6 class="font-weight-semibold mb-0">{{$user->name}}</h6>
                            <div class="list-icons list-icons-extended mt-3">
                                <a href="https://facebook.com/{{$user->facebook}}" target="_blank" class="list-icons-item" data-popup="tooltip" title="Facebook" data-container="body"><i class="icon-facebook"></i></a>
                                <a href="https://twitter.com/{{$user->twitter}}" target="_blank" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
                                <a href="https://instagram.com/{{$user->instagram}}" target="_blank" class="list-icons-item" data-popup="tooltip" title="Instagram" data-container="body"><i class="icon-instagram"></i></a>
                            </div>
                        </div>
                    </div><!-- /user card -->

                   <!-- Latest connections -->
                    <div class="card">
                        <div class="card-header bg-transparent border-bottom header-elements-inline">
                            <span class="card-title font-weight-semibold">  آخر النشاطات للمستخدم</span>
                        </div>

                        <ul class="media-list media-list-linked my-2">

                            @if(count($articles))
                            <li class="media font-weight-semibold border-0 py-2">@if(auth()->user()->theme == 'rtl') المقالات @else Articles @endif</li>
                            @foreach($articles as $article)
                            <li>
                                <a href="{{route('articles.show',$article->id)}}" class="media">
                                    <div class="mr-3">
                                        <img src="{{$article->photo}}" class="rounded-circle" width="40" height="40" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">{{ Illuminate\Support\Str::limit($article->title, $limit = 30, $end = '...' )}}</div>
                                        <span class="text-muted font-size-sm">{{optional($article->category)->name}}</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <span class="badge badge-mark @if($article->status == 1) bg-success border-success @else bg-warning-400 border-warning-400 @endif"></span>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                            @else
                                <div class="alert alert-danger  alert-dismissible">
                                    <span class="font-weight-semibold">لا توجد مقالات لهذا المدير</span>.
                                </div>
                            @endif
                        </ul>
                    </div><!-- /latest connections -->
                </div><!-- /sidebar content -->
            </div><!-- /right sidebar component -->
        </div><!-- /inner container -->
    </div><!-- /content area -->
@endsection
