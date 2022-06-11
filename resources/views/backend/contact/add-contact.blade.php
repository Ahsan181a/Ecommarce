@extends('dashboard.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage contact</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">contact</li>
            </ol>
          </div>
        </div>
      </div>
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
                <h3>Contact List
                  <a href="{{route('contact.view')}}" class="btn btn-success btn-sm float-sm-right"><i class="fa fa-plus-circle"></i> Add view</a>  
                </h3>
              </div>
              <div class="card-body">
                <div class="offset-sm-2">
                <form class="form-horizontal" method="POST" action="{{route('contact.store')}}" id="myForm">
                  @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 ">Mobile</label>
                    <div class="col-sm-8">
                      <input type="text" name="mobile_no" class="form-control" id="mobile_no" placeholder="mobile" required>
                      <font style="color:red;">{{($errors->has('mobile_no'))?($errors->first('mobile_no')):''}}</font>
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
                    <label for="address_no" class="col-sm-2">Address</label>
                    <div class="col-sm-8">
                      <input type="text" name="address_no" class="form-control" id="" placeholder="address_no" required>
                      <font style="color:red;">{{($errors->has('address_no'))?($errors->first('address_no')):''}}</font>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="facebook" class="col-sm-2">facebook</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="facebook" name="facebook" placeholder="facebook">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="twitter" class="col-sm-2">twitter</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="twitter" name="twitter" placeholder="twitter">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="youtube" class="col-sm-2">youtube</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="youtube" name="youtube" placeholder="youtube">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="linkedin" class="col-sm-2">linkedin</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="linkedin">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="google_plus" class="col-sm-2">google_plus</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="google_plus" name="google_plus" placeholder="google_plus">
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