<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
    public function sendRegisterMail() {
        $mail = new RegisterMail();

        Mail::to('bianca.re4@hotmail.com')->send($mail);
    }
}
