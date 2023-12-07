<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\TestingMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(){
        $mailData = [
                'title' => 'Mail From Kanan',
                'body' => 'This For Check the Email'
        ];

        Mail::to('himanshulpu1@gmail.com')->send(new TestingMail($mailData));

        dd('Email Sent Successfully');

    }

}
