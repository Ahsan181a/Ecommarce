@extends('frontend.layout.home')
@section('content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" id="abc" style="background-image:url('/frontend/images/bg-02.jpg');">
         @php
            $abouts = DB::table('abouts')->first();    
        @endphp
       
        <h2 class="ltext-105 cl0 txt-center">
            {{$abouts->title}}
        </h2>
        
    </section>  

    <!-- Content page -->
    <section class="about-us py-5 " id="about-us">
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1 class='text-success'>Welcome!</h1>
            <h2>Know More About Us</h2>
            <hr>
            <p>{{$abouts->description}}.</p>
            <button type="button" class="btn btn-success">Let's Know More</button>

        </div>
        <div class="col-md-6">
            <img src="http://themebubble.com/demo/marketingpro/wp-content/uploads/2016/10/seo-slide.png "alt="">
        </div>
    </div>
</div>
</section>
    <!-- Map -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5983460988937!2d90.42140761445673!3d23.79731309290065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7ba919c9e8f%3A0x74c8c1dc2d04bd18!2sNatun%20Bazar%20Foot%20Over%20Bridge%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1575619103631!5m2!1sen!2sbd" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div><br/>

@endsection