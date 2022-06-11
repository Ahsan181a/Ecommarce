<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class PasswordController extends Controller
{
    public function view()
    {
        return view('backend.user.edit-password');
    }

    public function update(Request $request)
    {
      
       if (Auth::attempt(['id'=>Auth::user()->id,'password'=>$request->current_password])){

        $user = User::find(Auth::user()->id);
        $user->password = bcrypt($request->new_password);
        $user->save();
        return redirect()->route('profile.view');

       }else{
        return redirect()->back()->with('error','Sorry! you current password does not match');
       }
    }
}