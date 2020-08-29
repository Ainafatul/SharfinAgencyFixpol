<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('lib/bootstrap/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('lib/bootstrap/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('res/css/custom.css')}}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=lora:400,700|Montserrat:200,400,500,600,700,900&display=swap">
    <link rel="script" href="{{asset('res/js/main.js')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=lora:400,700|Montserrat:200,400,500,600,700,900&display=swap">

    <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap/OwlCarousel/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap/OwlCarousel/dist/assets/owl.theme.default.min.css')}}">

</head>
<body>
@include('section.TopNavBar')

@yield('content')

@section('footer')
@include('section.Footer')
@show
<!-- <script>
    @stack('scripts')
</script> -->
{{--<script src="{{asset('lib/bootstrap/OwlCarousel/docs/assets/vendor/jquery.min.js')}}" type="text/javascript"></script>--}}
<script src="{{asset('lib/bootstrap/OwlCarousel/dist/owl.carousel.min.js')}}" type="text/javascript"></script>

<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
    });
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            }
        }
    })

    // @push('scripts')
    // var path = "{{ route('loc') }}";
    // $('#location').typeahead({
    //     source: function (query, process) {
    //         return $.get(path, {query: query}, function (data) {
    //             return process(data);
    //         });
    //     }
    // });
    // @endpush

</script>
</body>
</html>
