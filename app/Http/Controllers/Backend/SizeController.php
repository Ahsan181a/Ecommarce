<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Size;
use Auth;

class SizeController extends Controller
{
     public function view()
    {
        $data['allData'] = Size::all();
        return view('backend.size.size-view',$data);
        
    }
    public function add()
    {
        return view('backend.size.size-add');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required|unique:sizes,name'
        ]);
        $data = new Size();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('sizes.view')->with('success','succesfully');
    }

    public function delete(Request $request,$id)
    {
        $size = Size::find($id);
        $size->delete();
        return redirect()->back();
    }
}
