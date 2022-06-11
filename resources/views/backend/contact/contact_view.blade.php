@extends('dashboard.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="width:100%">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid " style="width:100%">
        <div class="row md-12">
          <div class="col-md-12">
            <h1 class="m-0">Manage Contact</h1>
          </div><!-- /.col -->
          <div class="col-md-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact</li>
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
                <h3>Contact List
                  <a href="{{route('contact.add')}}" class="btn btn-success btn-sm float-sm-right"><i class="fa fa-plus-circle"></i>Contact Add</a>  
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
              <table id="example" class="table  table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>address_no</th>
                  <th>Email</th>
                  <th>mobile_no</th>
                  <th>facebook</th>
                  <th>twitter</th>
                  <th>youtube</th>
                  <th>google_plus</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($allData as $key => $contact)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$contact->address_no}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->mobile_no}}</td>
                    <td>{{$contact->facebook}}</td>
                    <td>{{$contact->twitter}}</td>
                    <td>{{$contact->youtube}}</td>
                    <td>{{$contact->google_plus}}</td>
                   <td class="col-md-2">
                      <a href="" class="btn btn-secondary  btn-sm btn-secondary"><i class="fa fa-edit"></i></a>
                      <a href="" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> </a>
                      <a href="{{route('contact.delete',$contact->id)}}" id="delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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