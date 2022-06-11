<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
use DB;
use Carbon\Carbon;

class UserController extends Controller
{
    public function view()
    {
        $data['allData'] = User::all();
        return view('backend.user.view-user',$data);
    }
    public function add()
    {
        return view('backend.user.user-add');
    }
    public function store(Request $request)
    {
        $data = new User();
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
        ]);
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        notify()->success('user data insert succesfully!');
        return redirect()->back()->with('success','succesfully');
    }
    public function edit($id)
    {
        $editData = User::find($id);
        toastr()->success('Success Message');
        return view('backend.user.user-edit',compact('editData'));
    }
    public function update(Request $request,$id)
    {
        $data = User::find($id);
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
        return redirect()->back()->with('success','data update successfully');
    }
    public function delete(Request $request,$id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

}