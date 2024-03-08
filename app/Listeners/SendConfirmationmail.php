<?php

namespace App\Listeners;

use App\Events\registerUser;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendConfirmationmail
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
     * @param  \App\Events\registerUser  $event
     * @return void
     */
    public function handle(registerUser $event)
    {
        $user = $event->user;
        $mailData = [
            'subject' => 'Mail from Vkaps ',
            'body' => 'This is for testing ',
            'userData'=>$user,
        ];
        $subject = 'Welcome to Vkaps';

         Mail::to($user->email)->send(new RegisterMail($mailData),$subject);
    }
}
