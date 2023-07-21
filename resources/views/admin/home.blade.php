@extends('admin.layouts.app')

@section('titleDashboard')
الرئيسية /
@endsection
@section('head1')
    <script src="{{asset('admin/global_assets/js/plugins/visualization/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/widgets_stats.js"')}}"></script>
    <style>
        body {
            font-family: Cairo;
            font-size: 0.95em;
            color: #929292;
        }

        .report-container {
            border: #E0E0E0 1px solid;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 550px;
            margin: 0 auto;
            background: linear-gradient(to right, #583d72, #9f5f80);

        }

        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }

        .weather-forecast {
            color: #212121;
            font-size: 1.2em;
            font-weight: bold;
            margin: 20px 0px;
        }

        span.min-temperature {
            margin-right: 15px;
            color: #929292;
        }

        .time {
            line-height: 25px;
        }
    </style>
@endsection



@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i>
                    <span class="font-weight-semibold"> الرئيسية </span> -   لوحة التحكم </h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{url('/')}}" class="breadcrumb-item" title="زيارة الصفحة الرئيسية بالموقع"><i class="icon-home2 mr-2"></i>زيارة الموقع</a>
                    <span class="breadcrumb-item active"> لوحة التحكم </span>
                </div>
            </div>
        </div>
    </div><!-- /page header -->

    <div class="content "><!-- Basic line -->
        <!-- Simple statistics -->
        <div class="mb-3">
            <h6 class="mb-0 font-weight-semibold">احصائيات بسيطة</h6>
        </div>

        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="card card-body">
                    <div class="media">
                        <div class="mr-3 align-self-center">
                            <i class="icon-users4 icon-3x text-success-400"></i>
                        </div>
                        <div class="media-body text-right">
                            <h3 class="font-weight-semibold mb-0">{{$usersMonth}}</h3>
                            <span class="text-uppercase font-size-sm text-muted" title="عدد المستخدمين فى اخر شهر"> المستخدمين </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card card-body">
                    <div class="media">
                        <div class="mr-3 align-self-center">
                            <a href="{{route('admin.visits')}}"><i class="icon-enter6 icon-3x text-indigo-400"></i></a>
                        </div>
                        <div class="media-body text-right">
                            <h3 class="font-weight-semibold mb-0">{{$visit_site}}</h3>
                            <span class="text-uppercase font-size-sm text-muted" title="زيارات الموقع ف الشهر الاخير">زيارات الموقع</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card card-body">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="font-weight-semibold mb-0">{{$articles_Month}}</h3>
                            <span class="text-uppercase font-size-sm text-muted" title="عدد المقالات فى الشهر الاخير">المقالات </span>
                        </div>
                        <div class="ml-3 align-self-center">
                            <i class="icon-file-text3 icon-3x text-blue-400"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card card-body">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="font-weight-semibold mb-0">{{$visit_articles}}</h3>
                            <span class="text-uppercase font-size-sm text-muted" title="زيارات المقالات فى الشهر الاخير"> زيارة المقالات</span>
                        </div>

                        <div class="ml-3 align-self-center">
                            <i class="icon-stats-growth icon-3x text-danger-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
