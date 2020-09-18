<?php

namespace App\Listeners;

use App\Providers\NewClientHasRegisteredNewsletterEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\NewsletterMail;
use Illuminate\Support\Facades\Mail;


class WelcomeNewsletterMail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewClientHasRegisteredNewsletter  $event
     * @return void
     */
    public function handle(NewClientHasRegisteredNewsletterEvent $event)
    {
        sleep(10);
        
        Mail::to($event->newsletter->emailletter)->send(new NewsletterMail());
    }
}
