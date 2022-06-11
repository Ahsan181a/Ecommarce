@extends('frontend.layout.home')
@section('content')
<style type="text/css"> 
#login .container #login-row #login-column #login-box {
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
  margin-top:;
  margin-bottom: 40px;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" id="abc" style="background-image:url('/frontend/images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Login form
        </h2>
    </section>
    <!-- Content page -->
   <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                                <i class="fa fa-user"></i> No Account yet ?<a href="{{route('customer.sungup')}}"><span>Singup new account</span></a>
                            </div>
                            <div id="register-link" class="text-right">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection