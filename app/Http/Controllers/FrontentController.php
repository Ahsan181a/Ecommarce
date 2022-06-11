<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Contact;
use App\Model\Logo;
use App\Model\Color;
use App\Model\Size;
use App\Model\Brand;
use App\Model\Cart;
use App\Model\ProductSize;
use App\Model\ProductColor;
use App\Model\ProductSubImage;

class FrontentController extends Controller
{
    public function index()
    {
        $data['contact']= Contact::all();
        $data['logos']= Logo::first();
        $data['colors'] = Color::get();
        $data['sizes'] = Size::get();
        return view ('frontend.layout.master',$data);
    }
}