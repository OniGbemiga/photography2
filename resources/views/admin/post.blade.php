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
            <h1>POSTS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Posts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- /.row -->
        <!-- =========================================================== -->
        <div class="row">
            @foreach ($blogs as $blog)    
                <div class="col-md-6">
                    <!-- Box Comment -->
                    <div class="card card-widget">
                        <div class="card-header">
                            <div class="user-block">
                                <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                                <span class="username"><a href="/blogs/{{$blog->id}}">{{$blog->title}}</a></span>
                                <span class="description">Shared publicly - {{$blog->created_at}}</span>
                            </div>
                            <!-- /.user-block -->
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" title="Mark as read">
                                <i class="far fa-circle"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <img class="img-fluid pad" src="/storage/{{$blog->blog_image}}" alt="Photo">

                            <p>{{$blog->short_message}}</p>
                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                            <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                            <span class="float-right text-muted">127 likes - 3 comments</span>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer card-comments">
                            <div class="card-comment">
                                <!-- User image -->
                                <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                                <div class="comment-text">
                                    <span class="username">
                                        Maria Gonzales
                                    <span class="text-muted float-right">8:03 PM Today</span>
                                    </span><!-- /.username -->
                                    It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout.
                                </div>
                                <!-- /.comment-text -->
                            </div>
                            <!-- /.card-comment -->
                            <div class="card-comment">
                                <!-- User image -->
                                <img class="img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="User Image">

                                <div class="comment-text">
                                    <span class="username">
                                        Luna Stark
                                    <span class="text-muted float-right">8:03 PM Today</span>
                                    </span><!-- /.username -->
                                    It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout.
                                </div>
                                <!-- /.comment-text -->
                            </div>
                            <!-- /.card-comment -->
                        </div>
                        <!-- /.card-footer -->
                        <div class="card-footer">
                            <form action="#" method="post">
                                <img class="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                                <!-- .img-push is used to add margin to elements next to floating images -->
                                <div class="img-push">
                                    <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                                </div>
                            </form>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
            @endforeach
        </div>
        <!-- /.row -->

        <!-- =========================================================== -->
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
<!-- /.content -->

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
</div>
  <!-- /.content-wrapper -->

    
@endsection