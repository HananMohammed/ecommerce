<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lively Cart Pro | @yield('title')</title>
    <link rel="icon" href="{{asset_public('images/[pro-demo.livelycart.com][477]favicon.ico')}}" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/style.css')}}" media="all"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    @if (session()->get('locale')=='ar'||session()->get('locale')==null)
        <link href="https://fonts.googleapis.com/css?family=Cairo:300,400,600,700&display=swap&subset=arabic" rel="stylesheet">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/stylear.css')}}" media="all"/>
    @else
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900&display=swap" rel="stylesheet">
    @endif
</head>
@stack('header_style')
<body>

<!-- Navbar -->
@include('front.inc.navbar')
<!-- End Navbar -->

<!-- content -->
@yield('content')
<!-- End content -->

<!--start of footer-->
@include('front.inc.footer')
<!--end of footer-->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{ asset_public('js/index.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#media-navbar').on('click' ,function (event) {
            event.preventDefault() ;
            $('.wrapper').slideToggle(2000);
            //
            // console.log($('.wrapper').toggleClass('hidden'))
            // if($('.wrapper').toggleClass('hidden') ){
            //     $('#media-navbar').children().removeClass('fas fa-times fa-lg').addClass("navbar-toggler-icon")
            // }else{
            //     $('#media-navbar').children().removeClass('navbar-toggler-icon').addClass("fas fa-times fa-lg")
            // }

        });
    });

</script>
</body>

</html>

