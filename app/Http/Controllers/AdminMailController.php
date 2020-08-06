<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class AdminMailController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }

    public function adminMailInbox(){

        $contacts = Contact::latest()->get();

        return view('admin.mail.inbox')->with('contacts',$contacts);
    }

    public function adminMailCompose(){

        $contacts = Contact::all();

        return view('admin.mail.compose')->with('contacts',$contacts);
    }

    public function adminMailRead($id){

        $contacts = Contact::find($id);

        return view('admin.mail.read')->with('contacts',$contacts);
    }

    public function adminMailDelete($id){

        $contacts = Contact::find($id);

        $contacts->delete();

        return redirect('/admin/mail/inbox');

    }
}
