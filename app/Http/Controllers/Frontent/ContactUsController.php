<?php

namespace App\Http\Controllers\Frontent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('frontend.contactus.contact-us');
    }
}
