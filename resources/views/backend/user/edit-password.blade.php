@extends('dashboard.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">password</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <section class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3>Change Password
                  <a href="{{route('users/view')}}" class="btn btn-success btn-sm float-sm-right"><i class="fa fa-plus-circle"></i> Add view</a>  
                </h3>
              </div>
              <div class="card-body">
                <div class="offset-sm-2">
                <form class="form-horizontal" method="post" action="{{route('password.update')}}" id="myForm">
                  @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="current_password" class="col-sm-3">Current Password <span class="float-right">:</span></label>
                    <div class="col-sm-8">
                      <input type="password" name="current_password" class="form-control" id="" placeholder="Password" required>
                      <font style="color:red;">{{($errors->has('password'))?($errors->first('password')):''}}</font>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="new_password" class="col-sm-3">New Password <span class="float-right">:</span></label>
                    <div class="col-sm-8">
                      <input type="password" name="new_password" class="form-control" id="new_password" placeholder="Password" required>
                      <font style="color:red;">{{($errors->has('password'))?($errors->first('password')):''}}</font>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="again_new_password" class="col-sm-3">Again New Password <span class="float-right">:</span></label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" id="again_new_password" name="again_new_password" placeholder="confirm Password">
                    </div>
                  </div>
                </div>
                  <button type="submit" value="update" class="btn btn-info float-sm-center">Submit</button>
                </div>
                </form>
                </div>
              </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
  </div>
@endsection