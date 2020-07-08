@extends('layouts.body')

@section('content')

    <div id="colorlib-main">
        <section class="ftco-section ftco-bread">
            <div class="container">
                <div class="row no-gutters slider-text justify-content-center align-items-center">
                    <div class="col-md-8 ftco-animate">
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home</a></span> <span>ADD POST</span></p>
                        <h1 class="bread">Add Post</h1>
                    </div>
                </div>
            </div>
        </section>

        <section>
                <div class="col-md-12">
                    <form action="/blogs" method="POST" enctype="multipart/form-data" class="bg-light p-5 contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="blog_image" class="form-control" placeholder="">
                            @error('blog_image')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Title Of Post" value="{{old('title')}}">
                            @error('title')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message">{{old('message')}}</textarea>
                            @error('message')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Add Post" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
        </section>


@endsection
