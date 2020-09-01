<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/preview/theme/louie/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jul 2020 20:40:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Louie - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">
{{--    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
        <h1 id="colorlib-logo"><a href="{{route('index')}}"><span class="img" style="background-image: url({{asset('images/author.jpg')}});"></span>{{$profile->name ?? 'Oni Gbenga'}}</a></h1>
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li  class="colorlib-active"><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('collection')}}">Collection</a></li>
                <li><a href="{{route('about')}}">About Me</a></li>
                <li><a href="{{route('services')}}">My Services</a></li>
                <li><a href="/blogs">Blog</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>
        <div class="colorlib-footer">
            <h3>Newsletter</h3>
            <div class="d-flex justify-content-center">
                <form action="#" class="colorlib-subscribe-form">
                    <div class="form-group d-flex">
                        <div class="icon"><span class="icon-paper-plane"></span></div>
                        <input type="text" class="form-control" placeholder="Enter Email Address">
                    </div>
                </form>
            </div>
        </div>
    </aside>



        @yield('content')




        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container px-md-5">
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4 ml-md-4">
                            <h2 class="ftco-heading-2">Recent Photos</h2>
                            <ul class="list-unstyled photo">
                                @foreach ($images->take(6) as $image)                            
                                    <li><a href="/collection" class="img" style="background-image: url({{asset($image->original)}});"></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Archives</h2>
                            <ul class="list-unstyled categories">
                                <li><a href="#">November 2018 <span>(105)</span></a></li>
                                <li><a href="#">October 2018 <span>(212)</span></a></li>
                                <li><a href="#">September 2018 <span>(150)</span></a></li>
                                <li><a href="#">August 2018 <span>(100)</span></a></li>
                                <li><a href="#">July 2018 <span>(200)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Have a Questions?</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">{{$profile->address ?? '9 Ayinke Street, Off Ladi-lak Street, Bariga, Lagos'}}</span></li>
                                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+{{$profile->number ?? '2347038241936'}}</span></a></li>
                                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><span class="__cf_email__" data-cfemail="066f686069467f69737462696b676f682865696b">[email&#160;protected]</span></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Copyright &copy;<script data-cfasync="false" src="{{asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script type="d4b2fcfa3cd0ec3d48f153b9-text/javascript">document.write(new Date().getFullYear());</script> All rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>
</div>
</div>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
<script src="{{asset('js/jquery.min.js')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="{{asset('js/popper.min.js')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="{{asset('js/owl.carousel.min.js')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="{{asset('js/aos.js')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="{{asset('js/jquery.animateNumber.min.js')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="{{asset('js/jquery.timepicker.min.html')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="{{asset('js/scrollax.min.js')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="{{asset('js/google-map.js')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script src="{{asset('js/main.js')}}" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="d4b2fcfa3cd0ec3d48f153b9-text/javascript"></script>
<script type="d4b2fcfa3cd0ec3d48f153b9-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="{{asset('ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="d4b2fcfa3cd0ec3d48f153b9-|49" defer=""></script></body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: '300px',
            placeholder: 'Content Here....'
        });
    });
</script>

<!-- Mirrored from colorlib.com/preview/theme/louie/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jul 2020 20:40:52 GMT -->
</html>

