<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;
Use Auth;
class ProfileController extends Controller
{
    public function view()
    {
        $id = Auth::user();
        $user = User::find($id);
        return view('backend.profile.view-profile',compact('user'));
        
    }
}