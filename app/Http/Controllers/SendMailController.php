<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\SendEmailToAdvertiser;

class SendMailController extends Controller
{
    public function sendMail(ContactRequest $user)
    {
        \Mail::to($user->adv_email)->send(new SendEmailToAdvertiser($user));

        return back();
    }
}
