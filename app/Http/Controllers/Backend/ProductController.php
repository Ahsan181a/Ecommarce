<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Brand;
use App\Model\Product;
use App\Model\Size;
use App\Model\Color;
use App\Model\ProductColor;
use App\Model\ProductSize;
use App\Model\ProductSubImage;
use Auth;
use DB;
class ProductController extends Controller
{
     public function view()
    {
        $data['allData'] = product::all();
        return view('backend.product.product-view',$data);  
    }
    public function add()
    {
        $data['categories']= Category::all();
        $data['sub_images']=ProductSubImage::all();
        $data['products'] =Product::all();
        $data['brands']= Brand::all();
        $data['sizes']= Size::all();
        $data['colors']= Color::all();
        $data['color'] = ProductColor::all();
        return view('backend.product.product-add',$data);
    }
    public function store(Request $request)
    {
       
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->price = $request->price;
        $product->short_desc = $request->short_desc;
        $product->long_desc = $request->long_desc;
        $img = $request->file('image');
        if($img){
            $imgName = date('YmdHi').$img->getClientOriginalName();
            $img->move('public/upload/product_images',$imgName);
            $product['image']= $imgName; 
        }
        if ($product->save()) {
            $files = $request->sub_image;
            if (!empty($files)) {
                foreach($files as $file){
                  $imgName = date('YmdHi').$file->getClientOriginalName();
                    $file->move('public/upload/product_images/product_sub_images',$imgName);
                    $subimage['sub_image']= $imgName; 
                    $subimage = new ProductSubImage();
                    $subimage->product_id =$product->id;
                    $subimage->sub_image =$imaName;
                    $subimage->save; 
                }
            }
            // color table data inserts
            $colors = $request->color_id;
            if (!empty($colors)) {
                foreach($colors as $color){
                    $myColor = new ProductColor;
                    $myColor->product_id = $product->id;
                    $myColor->color_id =$color;
                    $myColor->save(); 
                }
            }
      //size table data insert
             $sizes = $request->size_id;
            if (!empty($sizes)) {
                foreach($sizes as $size){
                    $mySize = new ProductSize;
                    $mySize->product_id = $product->id;
                    $mySize->size_id =$size;
                    $mySize->save(); 
                }
            }
        }else{
            return redirect()->back();
        }
       
        return redirect()->route('product.view')->with('success','succesfully');
    }

    
    public function delete(Request $request,$id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect()->back();
    }
}
