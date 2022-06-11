<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Slider;

class SliderController extends Controller
{
   public function view()
    {
        $data['allData'] = Slider::all();
        return view('backend.slider.view-slider',$data);

    }
    public function add()
    {
        return view('backend.slider.add-slider');
    }

    public function store(Request $request)
    {
         $data = new Slider();
         $data->short_title=$request->short_title;
         $data->long_title = $request->long_title;
         if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move('upload/product_images/product_sub_images',$filename);
            $data['image']=$filename; 
         }
         $data->save();
         return redirect()->back();
    }

    public function delete(Request $request,$id)
    {
        $Slider = Slider::find($id);
        $Slider->delete();
        return redirect()->back();
    }
}
