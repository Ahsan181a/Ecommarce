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
                <h3>Slider List
                  <a href="{{route('slider.add')}}" class="btn btn-success btn-sm float-sm-right"><i class="fa fa-plus-circle"></i>Slider Add</a>  
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
              <table id="example" class="table  table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>image </th>
                  <th>Short Title</th>
                  <th>Long Title</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($allData as $key => $slider)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$slider->short_title}}</td>
                    <td>{{$slider->long_title}}</td>
                    <td>
                      <img src="{{(!empty($slider->image))?url('public/upload/product_images/product_sub_images'.$slider->image):asset('public/upload/no_image.png')}}">
                    </td>
                    <td>
                      <a href="{{route('slider.edit',$slider->id)}}" class="btn btn-secondary  btn-sm btn-secondary"><i class="fa fa-edit"></i>Edit</a>
                      <a href="" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</a>
                      <a href="{{route('slider.delete',$slider->id)}}" id="delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                    </td>
                  </tr>
                 @endforeach 
                </tbody>
              </table>
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