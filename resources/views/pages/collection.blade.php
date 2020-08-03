@extends('layouts.body')

@section('content')


    <div id="colorlib-main">
        <section class="ftco-section ftco-bread">
            <div class="container">
                <div class="row no-gutters slider-text justify-content-center align-items-center">
                    <div class="col-md-8 ftco-animate">
                        <p class="breadcrumbs"><span class="mr-2"><a href="index-2.html">Home</a></span> <span>Collection</span></p>
                        <h1 class="bread">My Collection</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section-3">
            <div class="photograhy">
                <div class="row">
                    @foreach ($images as $image)    
                        <div class="col-md-4 ftco-animate">
                            <a href="{{$image->original}}" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url({{$image->original}});">
                                <div class="overlay"></div>
                                <div class="text ml-4 mb-4">
                                    <h3>Photo {{$image->id}}</h3>
                                    <span class="tag">Model</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="col-12 d-flex justify-content-center">
                    {{$images->links()}}
                </div>
            </div>
        </section>

@endsection
