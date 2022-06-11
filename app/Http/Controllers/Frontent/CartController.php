<?php
namespace App\Http\Controllers\Frontent;
use App\Http\Controllers\Controller;
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

class CartController extends Controller
{
    public function addtoCart(Request $request)
    {
        echo "hi";
    }
}
