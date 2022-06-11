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
                  <a href="{{route('abouts.view')}}" class="btn btn-success btn-sm float-sm-right"><i class="fa fa-plus-circle"></i> Add view</a>  
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="offset-sm-2">
                <form class="form-horizontal" method="post" action="{{route('abouts.store')}}" id="myForm">
                  @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="title" class="col-sm-2 ">title</label>
                    <div class="col-sm-8">
                      <input type="text" name="title" class="form-control" id="title" placeholder="title" required>
                      <font style="color:red;">{{($errors->has('title'))?($errors->first('title')):''}}</font>
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="email" class="col-sm-2 ">Description</label>
                    <div class="col-sm-8">
                      <input type="text" name="description" class="form-control" id="" placeholder="description" required>
                      <font style="color:red;">{{($errors->has('description'))?($errors->first('description')):''}}</font>
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
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
  </div>
@endsection