<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use App\Mail\NewsletterMail;
use Illuminate\Support\Facades\Mail;
use App\Providers\NewClientHasRegisteredNewsletterEvent;


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

        event(new NewClientHasRegisteredNewsletterEvent($newsletter));
        //session::flash('message', 'Thank you');
        return back()->with('message', 'Thank you for Subscribing');
    }
}
