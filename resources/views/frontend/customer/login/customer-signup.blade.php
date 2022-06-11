@extends('frontend.layout.home')
@section('content')
<style type="text/css"> 

*[role="form"] {
    max-width: 930px;
    padding: 15px;
    margin: 0 auto;
    margin-top: 25px;
    margin-bottom:35px;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}

}
</style>
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" id="abc" style="background-image:url('/frontend/images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Registation form
        </h2>
    </section>
    <!-- Content page -->
<div class="container">
            <form class="form-group" role="form">
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label"> Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="First Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">phone</label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="mobile_no" name="mobile_no" placeholder="Last Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="confirmation_password" name="confirmation_password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="phoneNumber" placeholder="Phone number" class="form-control">
                    </div>
                </div>
                  <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Register">
                                <i class="fa fa-user"></i> Have your Account ?<a href="{{route('customer.login')}}"><span>Login Here</span></a>
                            </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
    <script>   
    $(function(){
    $.validator.setDefaults({
        highlight: function(element){
            $(element)
            .closest('.form-group')
            .addClass('has-error')
        },
        unhighlight: function(element){
            $(element)
            .closest('.form-group')
            .removeClass('has-error')
        }
    });
    
    $.validate({
        rules:
        {   
            password: "required",
            email: {
                required: true,
                email: true
            }
        },
            messages:{          
                email: {
                required: true,
                email: true
            }
        },
                password: {
                    required: " Please enter password"
                },
                
                email: {
                    required: ' Please enter email',
                    email: ' Please enter valid email'
                },
                
                
            }
            
    });
});
        </script>
@endsection