<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\About;

class AboutController extends Controller
{
    public function view()
    {
        $data['allData'] = About::all();
        return view('backend.about.view-about',$data);
       
    }
    public function add()
    {
        return view('backend.about.add-about');
    }

     public function store(Request $request)
    {
        $data = new About();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        notify()->success('description data insert succesfully!');
        return redirect()->back()->with('success','succesfully');
    }

    public function delete(Request $request,$id)
    {
        $contact = About::find($id);
        $contact->delete();
        return redirect()->back();
    }
}
