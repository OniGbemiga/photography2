@extends('layouts.adminbody')

@section('admin')
@include('layouts.adminsidebar', ['apps' => $user])

@if (!isset($user->profile->name))
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="../../dist/img/user4-128x128.jpg"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">No Name</h3>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Happy Clients</b> <a class="float-right">0</a>
                </li>
                <li class="list-group-item">
                  <b>Studio Session</b> <a class="float-right">0</a>
                </li>
                <li class="list-group-item">
                  <b>Photo Session</b> <a class="float-right">0</a>
                </li>
                <li class="list-group-item">
                  <b>Equipments</b> <a class="float-right">0</a>
                </li>
              </ul>

              <a href="#create" class="btn btn-primary btn-block"><b>Create Profile</b></a>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i> About</strong>

              <p class="text-muted">
                No Record
              </p>

              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Socials</strong>

              <p class="text-muted">No Record</p>
              <p class="text-muted">No Record</p>
              <p class="text-muted">No Record</p>

              <hr>

              <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

              <p class="text-muted">
                <span class="tag tag-danger">No Record</span>
              </p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Contact Address</strong>

              <p class="text-muted">No Record</p>
              <p class="text-muted">No Record</p>
              <p class="text-muted">No Record</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#create" data-toggle="tab">Create Profile</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="create">
                  <form class="form-horizontal" action="{{route('adminProfileStore')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Name">
                      </div>
                      @error('name')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Mailing Address</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email">
                      </div>
                      @error('email')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group row">
                      <label for="inputTwitter" class="col-sm-2 col-form-label">Twitter</label>
                      <div class="col-sm-10">
                        <input type="url" class="form-control" id="inputTwitter" name="twitter" placeholder="twitter">
                      </div>
                      @error('twitter')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group row">
                      <label for="inputFacebook" class="col-sm-2 col-form-label">Facebook</label>
                      <div class="col-sm-10">
                        <input type="url" class="form-control" id="inputFacebook" name="facebook" placeholder="facebook">
                      </div>
                      @error('facebook')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group row">
                      <label for="inputInstagram" class="col-sm-2 col-form-label">Instagram</label>
                      <div class="col-sm-10">
                        <input type="url" class="form-control" id="inputInstagram" name="instagram" placeholder="instagram">
                      </div>
                      @error('instagram')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group row">
                      <label for="inputNumber" class="col-sm-2 col-form-label">Phone Number</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputNumber" name="number" placeholder="number">
                      </div>
                      @error('number')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group row">
                      <label for="inputContact" class="col-sm-2 col-form-label">Office Address</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputContact" name="address" placeholder="address">
                      </div>
                      @error('address')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Image</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputName2" name="image" placeholder="Name">
                      </div>
                      @error('image')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group row">
                      <label for="inputExperience" class="col-sm-2 col-form-label">About Me</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" id="inputExperience" name="about" placeholder="About Me"></textarea>
                      </div>
                      @error('about')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group row">
                      <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSkills" name="skill" placeholder="Skills">
                      </div>
                      @error('skill')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group row">
                      <label for="inputSkills" class="col-sm-2 col-form-label">Appraisal</label>
                      <div class="col-sm-2">
                        <input type="number" class="form-control" id="inputSkills" name="pound" placeholder="Pounds Of Equipments">
                        @error('pound')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="col-sm-2">
                        <input type="number" class="form-control" id="inputSkills" name="studio" placeholder="Studio Session">
                        @error('studio')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="col-sm-2">
                        <input type="number" class="form-control" id="inputSkills" name="finished" placeholder="Finished Photosessions">
                        @error('finished')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="col-sm-2">
                        <input type="number" class="form-control" id="inputSkills" name="happy" placeholder="Happy Clients">
                        @error('happy')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{Auth::User()->id}}">
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Create Profile</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@else
<!-- /.content-wrapper -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="/storage/profile_image/{{$user->profile->image}}"
                       alt="User profile picture">
                </div>
                    
                <h3 class="profile-username text-center">{{$user->profile->name}}</h3>
                  
                {{-- <p class="text-muted text-center">Software Engineer</p> --}}

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Happy Clients</b> <a class="float-right">{{$user->profile->happy}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Studio Session</b> <a class="float-right">{{$user->profile->studio}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Photo Session</b> <a class="float-right">{{$user->profile->finished}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Equipments</b> <a class="float-right">{{$user->profile->pound}}</a>
                  </li>
                </ul>

                <a href="#update" class="btn btn-primary btn-block"><b>Update</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> About</strong>

                <p class="text-muted">
                  {{$user->profile->about}}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Socials</strong>

                <p class="text-muted">{{$user->profile->twitter}}</p>
                <p class="text-muted">{{$user->profile->facebook}}</p>
                <p class="text-muted">{{$user->profile->instagram}}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">{{$user->profile->skill}}</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Contact Address</strong>

                <p class="text-muted">{{$user->profile->number}}</p>
                <p class="text-muted">{{$user->profile->address}}</p>
                <p class="text-muted">{{$user->profile->email}}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#update" data-toggle="tab">Update Profile</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="update">
                    <form class="form-horizontal" action="{{route('adminProfileUpdate', ['profiles' => $user->profile->id])}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PATCH')
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" name="name" value="{{$user->profile->name}}">
                        </div>
                        @error('name')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Mailing Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" name="email" value="{{$user->profile->email}}">
                        </div>
                        @error('email')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="form-group row">
                        <label for="inputTwitter" class="col-sm-2 col-form-label">Twitter</label>
                        <div class="col-sm-10">
                          <input type="url" class="form-control" id="inputTwitter" name="twitter" value="{{$user->profile->twitter}}">
                        </div>
                        @error('twitter')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="form-group row">
                        <label for="inputFacebook" class="col-sm-2 col-form-label">Facebook</label>
                        <div class="col-sm-10">
                          <input type="url" class="form-control" id="inputFacebook" name="facebook" value="{{$user->profile->facebook}}">
                        </div>
                        @error('facebook')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="form-group row">
                        <label for="inputInstagram" class="col-sm-2 col-form-label">Instagram</label>
                        <div class="col-sm-10">
                          <input type="url" class="form-control" id="inputInstagram" name="instagram" value="{{$user->profile->instagram}}">
                        </div>
                        @error('instagram')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="form-group row">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="inputNumber" name="number" value="{{$user->profile->number}}">
                        </div>
                        @error('number')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="form-group row">
                        <label for="inputContact" class="col-sm-2 col-form-label">Office Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputContact" name="address" value="{{$user->profile->address}}">
                        </div>
                        @error('address')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" id="inputName2" name="image" value="{{$user->profile->image}}">
                        </div>
                        @error('image')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">About Me</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" name="about" placeholder="About Me">{{$user->profile->about}}</textarea>
                        </div>
                        @error('about')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" name="skill" value="{{$user->profile->skill}}">
                        </div>
                        @error('skill')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Appraisal</label>
                        <div class="col-sm-2">
                          <input type="number" class="form-control" id="inputSkills" name="pound" value="{{$user->profile->pound}}">
                          @error('pound')
                            <small class="text-danger">{{$message}}</small>
                          @enderror
                        </div>
                        <div class="col-sm-2">
                          <input type="number" class="form-control" id="inputSkills" name="studio" value="{{$user->profile->studio}}">
                          @error('studio')
                            <small class="text-danger">{{$message}}</small>
                          @enderror
                        </div>
                        <div class="col-sm-2">
                          <input type="number" class="form-control" id="inputSkills" name="finished" value="{{$user->profile->finished}}">
                          @error('finished')
                            <small class="text-danger">{{$message}}</small>
                          @enderror
                        </div>
                        <div class="col-sm-2">
                          <input type="number" class="form-control" id="inputSkills" name="happy" value="{{$user->profile->happy}}">
                          @error('happy')
                            <small class="text-danger">{{$message}}</small>
                          @enderror
                        </div>
                      </div>
                      <input type="hidden" name="user_id" value="{{Auth::User()->id}}">
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Update Profile</button>
                        </div>
                      </div>
                    </form>
                  </div>

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endif
@endsection