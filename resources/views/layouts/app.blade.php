@include('layouts.head')
<body>

@include('layouts.header')

@yield('content')

@include('layouts.footer')
{{-- <div class="copy-right-area bg-color">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <p>
                    <i class="ri-copyright-line"></i> Copyright جميع الحقوق محفوظة للقبطان
                </p>
            </div>
            <div class="col-lg-6">
                <p>By <a href="https://programmercaffe.com/" rel="nofollow" target="_blank">Programmer Caffe</a></p>
            </div>
        </div>
    </div>
</div> --}}




@include('layouts.footer-script')
</body>

</html>
