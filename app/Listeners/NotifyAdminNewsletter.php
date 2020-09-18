<?php

namespace App\Listeners;

use App\Providers\NewClientHasRegisteredNewsletterEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyAdminNewsletter
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
        //
    }
}
