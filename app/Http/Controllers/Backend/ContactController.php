<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Contact;
use Auth;

class ContactController extends Controller
{
    public function view()
    {
        $data['allData'] = Contact::all();
        return view('backend.contact.contact_view',$data);
        
    }
    public function add()
    {
        return view('backend.contact.add-contact');
    }
    public function store(Request $request)
    {
        $data = new Contact();
        $data->address_no = $request->address_no;
        $data->mobile_no = $request->mobile_no;
        $data->email = $request->email;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->youtube = $request->youtube;
        $data->linkedin = $request->linkedin;
        $data->google_plus = $request->google_plus;
        $data->save();


        notify()->success('Contact data insert succesfully!');
        return redirect()->back()->with('success','succesfully');
    }

    public function delete(Request $request,$id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back();
    }

}