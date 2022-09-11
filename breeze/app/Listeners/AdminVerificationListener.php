<?php

namespace App\Listeners;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Events\AdminVerificationEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminVerificationListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(AdminVerificationEvent $event)
    {
        if ($event->admin instanceof MustVerifyEmail && ! $event->admin->hasVerifiedEmail()) {
            $event->admin->sendEmailVerificationNotification();
        }
    }
}
