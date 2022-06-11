@extends('dashboard.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage color</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">color</li>
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
                <h3>Color List
                  <a href="{{route('colors.add')}}" class="btn btn-success btn-sm float-sm-right"><i class="fa fa-plus-circle"></i>color</a>  
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
              <table id="example" class="table  table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($allData as $key => $color)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$color->name}}</td>
                    <td>
                        <a href="" class="btn btn-secondary  btn-sm btn-secondary"><i class="fa fa-edit"></i></a>
                      <a href="" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> </a>
                      <a href="{{route('colors.delete',$color->id)}}" id="delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
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