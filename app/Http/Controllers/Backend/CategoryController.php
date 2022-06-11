<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use Auth;
class CategoryController extends Controller
{
    public function view()
    {
        $data['allData'] = Category::all();
        return view('backend.category.category-view',$data);
        
    }
    public function add()
    {
        return view('backend.category.categorys-add');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required|unique:categories,name'
        ]);
        $data = new Category();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('categorys.view')->with('success','succesfully');
    }

    public function delete(Request $request,$id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }

}
