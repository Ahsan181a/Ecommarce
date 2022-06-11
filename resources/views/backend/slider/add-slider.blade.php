@extends('dashboard.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slider</li>
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
                <h3>Slider  List
                  <a href="{{route('slider.view')}}" class="btn btn-success btn-sm float-sm-right"><i class="fa fa-plus-circle"></i> Add view</a>  
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="offset-sm-2">
                <form class="form-horizontal" method="post" action="{{route('slider.store')}}" enctype="multipart/form-data" id="myForm" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="title" class="col-sm-2 "> Short title</label>
                    <div class="col-sm-8">
                      <input type="text" name="short_title" class="form-control" id="short_title" placeholder="short_title" required>
                      <font style="color:red;">{{($errors->has('short_title'))?($errors->first('short_title')):''}}</font>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="title" class="col-sm-2 ">Long title</label>
                    <div class="col-sm-8">
                      <input type="text" name="long_title" class="form-control" id="long_title" placeholder="long_title" required>
                      <font style="color:red;">{{($errors->has('long_title' ))?($errors->first('long_title')):''}}</font>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 ">Image</label>
                    <div class="col-sm-8">
                      <input type="file" name="image" class="form-control" id="image" placeholder="image">
                    </div>
                  </div>
                  <!-- <div class="form-group col-md-2">
                    <img id="showImage"  src="{{asset('images/no_image.png')}}" style="width: 130px; height:150px; border:1 px solid #000000;" >
                  </div> -->
                  <div>
                    <img src="">
                  </div>
                </div>
                  <button type="submit" value="update" class="btn btn-info float-sm-center">Submit</button>
                </div>
                </form>
                </div>
              </div>
              </div>
            </div>
            <!-- /.card -->
          </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
@endsection