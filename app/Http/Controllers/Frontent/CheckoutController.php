<?php

namespace App\Http\Controllers\Frontent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function customerLogin()
    {
        return view('frontend/customer/login/customer-login');
    }
    public function customerSingup()
    {
        return view('frontend/customer/login/customer-signup');
    }
}
