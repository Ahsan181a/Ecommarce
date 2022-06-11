@extends('frontend.layout.home')
@section('content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" id="abc" style="background-image:url('/frontend/images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Contact
        </h2>
    </section>  
@php
    $contacts = DB::table('contacts')->first();    
@endphp 
    <!-- Content page -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form method="post" action="" id="form">
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Send Us A Message
                        </h4>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name" placeholder="Your Name" value="" required="">
                            <img class="how-pos4 pointer-none" src="{{asset('frontend/images/icons/user.png')}}" alt="ICON">
                            <font color="red"><b></b></font>
                        </div>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email" placeholder="Your Email Address" value="" required="">
                            <img class="how-pos4 pointer-none" src="{{asset('frontend/images/icons/icon-email.png')}}" alt="ICON">
                            <font color="red"><b></b></font>
                        </div>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="mobile" placeholder="Your Mobile Number" value="" required="">
                            <img class="how-pos4 pointer-none" src="{{asset('frontend/images/icons/mobile.png')}}" alt="ICON">
                            <font color="red"><b></b></font>
                        </div>

                        <div class="bor8 m-b-30">
                            <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="Your Message" required=""></textarea>
                            <font color="red"><b></b></font>
                        </div>

                        <button type="submit" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                            Submit
                        </button>
                    </form>
                </div>

                <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                    <div class="flex-w w-full p-b-42">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-map-marker"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Address
                            </span>

                            <p class="stext-115 cl6 size-213 p-t-18">
                                {{$contacts->address_no}}
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full p-b-42">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-phone-handset"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Lets Talk
                            </span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                +088 {{$contacts->mobile_no}}
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-envelope"></span>
                        </span>

                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Sale Support
                            </span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                {{$contacts->email}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    
    <!-- Map -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.336367518897!2d90.3668356142981!3d23.806635092544113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c10118a2eeb3%3A0x353bf2c6b4465ae!2sFara%20IT%20Limited%20%7C%20Ultimate%20IT%20Solution%20in%20Bangladesh!5e0!3m2!1sen!2sbd!4v1654926665741!5m2!1sen!2sbd" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div><br/>

@endsection