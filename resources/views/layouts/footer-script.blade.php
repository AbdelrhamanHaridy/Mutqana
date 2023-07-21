<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{asset('website/assets/js/lib/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('website/assets/js/lib/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('website/assets/js/lib/perfect-scrollbar.js')}}"></script>
<script src="{{asset('website/assets/js/lib/swiper-bundle.min.js')}}"></script>
<script src="{{asset('website/assets/js/lib/glightbox.min.js')}}"></script>
<script src="{{asset('website/assets/js/lib/counter-up.js')}}"></script>
<script src="{{asset('website/assets/js/lib/scrollCue.min.js')}}"></script>
<script src="{{asset('website/assets/js/app.js')}}"></script>
<script src="{{asset('website/assets/js/floating-wpp.js')}}"></script>
<script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '01101775645',
            popupMessage: 'Hello, thanks for visiting us! How are you?',
            message: "",
            showPopup: true,
            headerTitle: 'Welcome!',
            headerColor: 'crimson',
            backgroundColor: 'crimson',
            buttonImage: '<img src="{{asset('website/assets/images/banners/whatsapp.svg')}}" />'

        });
    });
</script>
{{--
<script src="{{asset('website/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('website/assets/js/bootstrap.bundle.min.js')}}"></script>


--}}
