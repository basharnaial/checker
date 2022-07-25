<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Mail;

class MailGunController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $user = User::find(1)->toArray();

        Mail::send('mailView', $user, function($message) use ($user) {
            $message->to($user['email']);
            $message->subject('Testing Mailgun');
        });

        dd('Mail Send Successfully');
    }
}

