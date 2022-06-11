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
      @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> data update a successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        @endif
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
                <h3>Edit User
                  <a href="{{route('users/view')}}" class="btn btn-success btn-sm float-sm-right"><i class="fa fa-plus-circle"></i> Add view</a>  
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="offset-sm-2">
                <form class="form-horizontal" method="post" action="{{route('users.update',$editData->id)}}" id="myForm">
                  @csrf
                <div class="card-body">
                  <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-2 col-form-label">User Role</label>
                     <div class="col-sm-8">
                       <select for="usertype" class="form-control form-control-lg" name="usertype" id="usertype">
                           <option>large select</option>
                           <option value="Admin"{{($editData->usertype=="Admin")?"selected":""}}>Admin</option>
                           <option value="User" {{($editData->usertype=="User")?"selected":""}}>User</option>
                       </select>
                     </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 ">Name</label>
                    <div class="col-sm-8">
                      <input type="text" name="name" value="{{($editData->name)}}" class="form-control" id="name" placeholder="name" required>
                      <font style="color:red;">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="email" class="col-sm-2 ">Email</label>
                    <div class="col-sm-8">
                      <input type="email" name="email" value="{{($editData->email)}}" class="form-control" id="" placeholder="Email" required>
                      <font style="color:red;">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                  <button type="submit" class="btn btn-info float-sm-center">update</button>
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
  <script type="text/javascript">
$(document).ready(function(){
  $('#myForm').validate({
    rules: {
      name: {
        required: true,
        name: true,
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      password2: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },  
    },
    messages: {
      name: {
        required: "Please enter a name address",
        name: "Please enter a valid name address"
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      password2: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
  </script>
@endsection