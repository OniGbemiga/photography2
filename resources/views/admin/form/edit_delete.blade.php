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
            <h1>Edit/Delete Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Edit/Delete Posts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Of Blog Posts</h3>

                <div class="card-tools">
                  <form action="/admin/form/edit_delete" method="GET">
                  <div class="input-group input-group-sm" style="width: 150px;">
                      @csrf
                      <input type="text" name="term" class="form-control float-right" placeholder="Search">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                      <a href="/admin/form/edit_delete" class="mt-1">
                        <span class="input-group-btn">
                            <button class="btn btn-dangger">
                                <span class="fas fa-sync-alt"></span>
                            </button>
                        </span>
                    </a>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($blogs as $blog)    
                    <tr>
                      <td>{{$blog->id}}</td>
                      <td>John Doe</td>
                      <td>{{$blog->created_at}}</td>
                      <td><span class="tag tag-success"><a href="/blogs/{{$blog->id}}">{{$blog->title}}</a></span></td>
                      <td>{{$blog->short_message}}</td>
                      <td><a href="/admin/form/edit_post/{{$blog->id}}"><button class="btn-warning">Edit</button></a></td>
                      <form action="{{route('adminDelete', ['admin' => $blog->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <td><button class="btn-danger">Delete</button></td>
                      </form>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <div class="col-12 d-flex justify-content-center">
        {{$blogs->links()}}
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    
@endsection