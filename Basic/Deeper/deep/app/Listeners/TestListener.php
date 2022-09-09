<?php

namespace App\Listeners;

use App\Models\User;
use App\Mail\TestMail;
use App\Events\TestEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(TestEvent $event)
    {
        dd($event->user);
        //    Mail::to("test@mail.com")->send(new TestMail($data));
        info("I am fired!");
    }
}
