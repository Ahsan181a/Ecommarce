@extends('dashboard.layouts.master')
@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div>
  </div>
    <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3>Product Create
                  <a href="{{route('product.view')}}" class="btn btn-success btn-sm float-sm-right"><i class="fa fa-plus-circle"></i> Add view</a>  
                </h3>
              </div>
              <div class="card-body">
              <div class="offset-sm-2">
                <form  method="POST" action="{{route('product.store')}}"   id="myForm" >
                  @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 ">Category</label>
                    <div class="col-sm-8">
                     <select class="form-control" name="category_id">
                        <option>Large select</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="name" class="col-sm-2 ">Brand</label>
                    <div class="col-sm-8">
                     <select class="form-control" name="brand_id">
                        @foreach($brands as $brand)
                          <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="color" class="col-sm-2 ">Color</label>
                    <div class="col-sm-8"> 
                     <select class="form-control select2
                     " multiple="multiple"  name="color_id[] " multiple>
                        @foreach($colors as $color)
                          <option style="font-weight-bold" class="text-primary" value="{{$color->id}}">{{$color->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 ">Size</label>
                    <div class="col-sm-8"> 
                     <select class="form-control select2" multiple="multiple"  name="size_id[]" multiple>
                        @foreach($sizes as $size)
                          <option style="font-weight-bold" value="{{$size->id}}" class="text-primary">{{$size->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 ">Name </label>
                    <div class="col-sm-8">
                      <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
                      <font style="color:red;">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 ">price</label>
                    <div class="col-sm-8">
                      <input type="number" name="price" class="form-control" id="price" placeholder="price" required>
                      <font style="color:red;">{{($errors->has('price'))?($errors->first('name')):''}}</font>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="short_desc" class="col-sm-2 ">Short description</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" name="short_desc" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="long_desc" class="col-sm-2">Long description</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" name="long_desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="image" class="col-sm-2 ">Image</label>
                    <div class="col-sm-8">
                      <input type="file" id="image" image="image" class="form-control" id="image" placeholder="image" required>
                      <font style="color:red;">{{($errors->has('image'))?($errors->first('name')):''}}</font>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 ">SubImage</label>
                    <div class="col-sm-8">
                      <input type="file" id="image" image="sub_image[]" multiple  class="form-control" id="image" placeholder="image" required>
                      <font style="color:red;">{{($errors->has('image'))?($errors->first('name')):''}}</font>
                    </div>
                  </div> 
                  </div>
                  <button type="submit" class="btn btn-info float-sm-center">Submit</button>
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