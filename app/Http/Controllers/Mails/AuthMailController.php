<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\RegisterMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
    public function sendRegisterMail() {
        // $mail = new RegisterMail();

        $user = new User();
        $user->name = 'regina';

        $registerMail = new RegisterMail($user);

        // return  $registerMail;
        Mail::to('bianca.re4@hotmail.com')->send($registerMail);
    }
}
