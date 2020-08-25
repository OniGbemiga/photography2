@extends('layouts.body')

@section('content')

@foreach ($profiles as $profile)
    
    <div id="colorlib-main">
        <section class="ftco-section-no-padding bg-light">
            <div class="hero-wrap">
                <div class="overlay"></div>
                <div class="d-flex align-items-center js-fullheight">
                    <div class="author-image text img d-flex">
                        <section class="home-slider js-fullheight owl-carousel">
                            <div class="slider-item js-fullheight" style="background-image: url({{asset('images/author.jpg')}});">
                            </div>
                            <div class="slider-item js-fullheight" style="background-image:url({{asset('images/author-2.jpg')}});">
                            </div>
                        </section>
                    </div>
                    <div class="author-info text p-3 p-md-5">
                        <div class="desc">
                            <span class="subheading">Hello! I'm</span>
                            <h1 class="big-letter">{{$profile->name}}</h1>
                            <h1 class="mb-4"><span>{{$profile->name}}</span> A Photographer. <span>I Capture Life</span></h1>
                            <p class="mb-4">{{$profile->about}}</p>
                            <h3 class="signature h1">{{$profile->name}}</h3>
                            <ul class="ftco-social mt-3">
                                <li class="ftco-animate"><a href="{{$profile->twitter}}" target="_blank"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="{{$profile->facebook}}" target="_blank"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="{{$profile->instagram}}" target="_blank"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section instagram">
            <div class="container">
                <div class="row justify-content-center mb-2 pb-3">
                    <div class="col-md-7 heading-section heading-section-2 text-center ftco-animate">
                        <h2 class="mb-4">Follow me on Instagram</h2>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md ftco-animate">
                        <a href="{{asset('images/image_1.jpg')}}" class="insta-img image-popup" style="background-image: url({{asset('images/image_1.jpg')}});">
                            <div class="icon d-flex justify-content-center">
                                <span class="icon-instagram align-self-center"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md ftco-animate">
                        <a href="{{asset('images/image_2.jpg')}}" class="insta-img image-popup" style="background-image: url({{asset('images/image_2.jpg')}});">
                            <div class="icon d-flex justify-content-center">
                                <span class="icon-instagram align-self-center"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md ftco-animate">
                        <a href="{{asset('images/image_3.jpg')}}" class="insta-img image-popup" style="background-image: url({{asset('images/image_3.jpg')}});">
                            <div class="icon d-flex justify-content-center">
                                <span class="icon-instagram align-self-center"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md ftco-animate">
                        <a href="{{asset('images/image_4.jpg')}}" class="insta-img image-popup" style="background-image: url({{asset('images/image_4.jpg')}});">
                            <div class="icon d-flex justify-content-center">
                                <span class="icon-instagram align-self-center"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md ftco-animate">
                        <a href="{{asset('images/image_5.jpg')}}" class="insta-img image-popup" style="background-image: url({{asset('images/image_5.jpg')}});">
                            <div class="icon d-flex justify-content-center">
                                <span class="icon-instagram align-self-center"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endsection

@endforeach

