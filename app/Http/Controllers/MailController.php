<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        $mailData = [
            'title'=>'Mail from PCO Link',
            'body' => 'This is the mail from smtp',
        ];
        Mail::to('moeezahmedkhan1@gmail.com')->send(new ContactMail($mailData));
        dd('Email send successfully');
    }
}
