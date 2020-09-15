<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use App\Mail\NewsletterMail;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function letters(Request $request){

        $this->validate($request,[
            // 'nameletter' => 'required',
            'emailletter' => 'required|email|unique:newsletters',
        ]);

        $newsletter = new Newsletter;
        // $newsletter->nameletter = $request->input('nameletter');
        $newsletter->emailletter = $request->input('emailletter');
        $newsletter->save();

        Mail::to($newsletter->emailletter)->send(new NewsletterMail());

        return back();
    }
}
