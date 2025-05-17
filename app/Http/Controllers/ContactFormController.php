<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $message = $request->input('message');
        $contactAnswer = $request->input('contact-answer');

        $messages = [
            'name.required' => 'We need to know your name!',
            'email.required' => 'Don\'t forget your email address!',
            'email.email' => 'Please provide a valid email address.',
            'message.required' => 'A message is required to submit the form.',
        ];

        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ], $messages);

        Mail::to('claudiucerna@gmail.com')->send(new ContactMail($validatedData));

        return redirect()->route('success');
    }
}
