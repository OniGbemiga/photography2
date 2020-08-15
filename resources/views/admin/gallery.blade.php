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
            <h1>Gallery</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div>
        </div>
        <div class="flex-center position-ref full-height" id="app">
          <example-component></example-component>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">Pictures</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  @foreach ($images as $image)    
                    <div class="col-sm-2">
                      <a href="{{$image->original}}" class=" img image-popup d-flex justify-content-start align-items-end">
                        <img src="{{$image->thumbnail}}" class="img-fluid mb-2" alt="white sample"/>
                      </a>

                      <form action="/images/{{$image->id}}" method="POST" class="form-group">
                        @method('DELETE')
                        @csrf

                        <button class="small btn-outline-danger">DELETE</button>

                      </form>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
              {{$images->links()}}
          </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- vuejs -->
<script src="{{ mix('/js/app.js') }}"></script>

@endsection