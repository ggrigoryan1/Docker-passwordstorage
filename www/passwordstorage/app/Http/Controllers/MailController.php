<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
    public function send_email($email, $password){
        $url = env('APP_URL');
        Mail::raw("Регистрация в системе $url
        Ваш логин для входа - $email
        Ваш пароль - $password
        ", function($message) use ($email) {
            $message->from(env('MAIL_USERNAME', ''));
            $message->to($email)->subject('Регистрация в системе');
        });
        return;
    }

}
