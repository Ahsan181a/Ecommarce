<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;

class LogoController extends Controller
{
     public function view()
    {
        $data['allData'] = Logo::all();
        return view('backend.logo.view-logo',$data);

    }
    public function add()
    {
        return view('backend.logo.add-logo');
    }

    public function store(Request $request)
    {
         $data = new Logo();
         if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move('upload/images/logo',$filename);
            $data['image']=$filename; 
         }
         $data->save();
         return redirect()->back();
    }

    public function delete(Request $request,$id)
    {
        $logo = Logo::find($id);
        $logo->delete();
        return redirect()->back();
    }
}
