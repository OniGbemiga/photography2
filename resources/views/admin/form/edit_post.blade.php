@extends('layouts.adminbody')

@section('admin')
@include('layouts.adminsidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Edit Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="{{route('adminUpdate', ['admin' => $blogs])}}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="inputName1">Cover Image</label>
          <input type="file" id="inputName1" class="form-control" name="blog_image" value="{{$blogs->blog_image}}">
          @error('blog_image')
            <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputName">Post Title</label>
          <input type="text" id="inputName" class="form-control" name="title" value="{{$blogs->title}}">
          @error('title')
            <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputDescription">Post Description</label>
          <textarea id="inputDescription" class="form-control" rows="4" placeholder="Not more than 90 words" name="short_message">{{$blogs->short_message}}</textarea>
          @error('short_message')
            <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  Post Content
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body pad">
                <div class="mb-3">
                  <textarea class="textarea" placeholder="Place some text here" name="message"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$blogs->message}}</textarea>
                  @error('message')
                    <small class="text-danger">{{$message}}</small>
                  @enderror          
                </div>
                <button class="btn-primary">Update Post</button>
              </div>
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    
@endsection