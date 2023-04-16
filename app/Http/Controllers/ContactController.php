<?php

namespace App\Http\Controllers;

use App\Models\ContactRequests;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contactUs(Request $request){
        $contacts = new contactrequests();
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->message = $request->message;
        $contacts->save();
        return redirect()->back()->with('message','Stay On touch We Will Contact You');
    }

    public function userContacts(){
        $user_contacts = ContactRequests::all();
        return view('admin.user_contacts_view',compact('user_contacts'));
    }
}
