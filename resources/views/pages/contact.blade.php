
@extends('layouts.body')

@section('content')
@foreach ($profiles as $profile)
    
    <div id="colorlib-main">
        <section class="ftco-section ftco-bread">
            <div class="container">
                <div class="row no-gutters slider-text justify-content-center align-items-center">
                    <div class="col-md-8 ftco-animate">
                        <p class="breadcrumbs"><span class="mr-2"><a href="index-2.html">Home</a></span> <span>Contact</span></p>
                        <h1 class="bread">Contact</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section contact-section">
            <div class="container">
                <div class="row d-flex mb-5 contact-info">
                    <div class="col-md-12 mb-4">
                        <h2 class="h3 font-weight-bold">Contact Information</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-light p-4">
                            <p><span>Address:</span> {{$profile->address}}</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-light p-4">
                            <p><span>Phone:</span> <a href="tel://+{{$profile->number}}">+{{$profile->number}}</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-light p-4">
                            <p><span>Email:</span> <a href="https://colorlib.com/cdn-cgi/l/email-protection#c8a1a6aea788b1a7bdbabba1bcade6aba7a5"><span class="__cf_email__" data-cfemail="630a0d050c231a0c1611100a17064d000c0e">[email&#160;protected]</span></a></p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-light p-4">
                            <p><span>Website</span> <a href="#">yoursite.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="row block-9">
                    <div class="col-md-6 d-flex">
                        <form action="{{route('contactus')}}" class="bg-light p-5 contact-form" method="POST">
                            @csrf
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" name="name" value="{{old('name')}}">
                            @error('name')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email" name="email" value="{{old('email')}}">
                            @error('email')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" name="subject" value="{{old('subject')}}">
                            @error('subject')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message">{{old('name')}}</textarea>
                            @error('message')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div id="map" class="bg-light"></div>
                    </div>
                </div>
            </div>
        </section>
@endforeach
@endsection

