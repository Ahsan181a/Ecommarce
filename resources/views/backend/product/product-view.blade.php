@extends('dashboard.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">product</li>
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
                <h3>Product List
                  <a href="{{route('product.add')}}" class="btn btn-success btn-sm float-sm-right"><i class="fa fa-plus-circle"></i>product</a>  
                </h3>
              </div>
              <div class="card-body">
              <table id="example" class="table  table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>Category</th>
                  <th>Brand</th>
                  <th>Product</th>
                  <th>Price</th>
                  <th>description</th>
                  <th>Image</th>
                  <th>Sub image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($allData as $key => $product)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$product['category']['name']}}</td>
                    <td>{{$product['brand']['name']}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->short_desc}}</td>
                    <td>{{$product->long_desc}}</td>
                    <td>{{$product->image}}</td>
                    <td>
                      <a href="" class="btn btn-secondary  btn-sm btn-secondary"><i class="fa fa-edit"></i></a>
                      <a href="" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> </a>
                      <a href="{{route('product.delete',$product->id)}}" id="delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                    </td>
                  </tr>
                 @endforeach 
                </tbody>
              </table>
              </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
  </div> 
@endsection