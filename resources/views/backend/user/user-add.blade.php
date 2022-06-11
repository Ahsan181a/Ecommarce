@extends('dashboard.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3>User List
                  <a href="{{route('users/view')}}" class="btn btn-success btn-sm float-sm-right"><i class="fa fa-plus-circle"></i> Add view</a>  
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="offset-sm-2">
                <form class="form-horizontal" method="post" action="{{route('users.store')}}" id="myForm">
                  @csrf
                <div class="card-body">
                  <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-2 col-form-label">User Role</label>
                     <div class="col-sm-8">
                       <select for="usertype" class="form-control form-control-lg" name="usertype" id="usertype">
                           <option>large select</option>
                           <option value="Admin">Admin</option>
                           <option value="Admin">User</option>
                       </select>
                     </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 ">Name</label>
                    <div class="col-sm-8">
                      <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
                      <font style="color:red;">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="email" class="col-sm-2 ">Email</label>
                    <div class="col-sm-8">
                      <input type="email" name="email" class="form-control" id="" placeholder="Email" required>
                      <font style="color:red;">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2">Password</label>
                    <div class="col-sm-8">
                      <input type="password" name="password" class="form-control" id="" placeholder="Password" required>
                      <font style="color:red;">{{($errors->has('password'))?($errors->first('password')):''}}</font>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2">confirm Password</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" id="password" name="password2" placeholder="confirm Password">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                  <button type="submit" class="btn btn-info float-sm-center">Submit</button>
                </div>
                <!-- /.card-footer -->
                </form>
                </div>
              </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
@endsection