@extends('dashboard.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-6 offset-md-3">
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{(!empty($user->image))?url('public/upload/user_images/'.$user->image):asset('public/upload/no_image.png')}}"
                       alt="User profile picture">
                      </div>
                      <h3 class="profile-username text-center"></h3>
                      <p class="text-muted text-center">Software Engineer</p>
                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>Followers</b> <a class="float-right">1,322</a>
                        </li>
                        <li class="list-group-item">
                          <b>Following</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                      <b>Friends</b> <a class="float-right">13,287</a>
                    </li>
                  </ul>
                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
          </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
@endsection