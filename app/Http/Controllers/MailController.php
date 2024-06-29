<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail as FacadesMail;

class MailController extends Controller
{
    public function index(Request $request){

        $validated = $request->validate([
            'email' => 'required|email'
        ]);

        $mailData = [
            'title'=> "Mail from ProjectsAndPrograms",
            'body'=> "We appriciate your joining request."
        ];

        Mail::to($validated['email'])->send(new DemoMail($mailData));

       return redirect('/')->with('success', 'Email Sended Successfully!');

    }
}
