<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminMailController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }

    public function adminMailInbox(){

        $contacts = Contact::latest()->get();
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('admin.mail.inbox')->with('contacts',$contacts)->with('user',$user);
    }

    public function adminMailCompose(){

        $contacts = Contact::all();
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('admin.mail.compose')->with('contacts',$contacts)->with('user',$user);
    }

    public function adminMailRead($id){

        $contacts = Contact::find($id);
        $ids = Auth::user()->id;
        $user = User::find($ids);

        return view('admin.mail.read')->with('contacts',$contacts)->with('user',$user);
    }

    public function adminMailDelete($id){

        $contacts = Contact::find($id);

        $contacts->delete();

        return redirect('/admin/mail/inbox');

    }
}
