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
        $user->password = 'regina';
        $user->email = 'regina02@gmail.com';

        $user->save();

        $registerMail = new RegisterMail($user);

        // return  $registerMail;
        Mail::to('bianca.re4@hotmail.com')
        ->cc('email@gmail.com')
        ->bcc('email2@gmail.com')
        ->queue($registerMail);
    }
}
