<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Color;
use Auth;
class ColorController extends Controller
{
     public function view()
    {
        $data['allData'] = Color::all();
        return view('backend.color.color-view',$data);
        
    }
    public function add()
    {
        return view('backend.color.color-add');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required|unique:colors,name'
        ]);
        $data = new Color();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('colors.view')->with('success','succesfully');
    }

    public function delete(Request $request,$id)
    {
        $color = Color::find($id);
        $color->delete();
        return redirect()->back();
    }

}
