<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    function send() {
        $username = 'Jonas';
        $email = 'master@jonas92.com';

        Mail::send('email/welcome', [
        'username' => $username
        ], function ($message) use ($email) {
            $message->from('mailbot@website.com', 'Website');
            $message->to($email);
            $message->subject('Welcome to Website');
        });

        return response('Welcome mail send to ' . $email, 200);
    }
}
