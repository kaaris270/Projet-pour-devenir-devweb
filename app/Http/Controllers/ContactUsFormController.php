<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsFormController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request)
    {
        return view('contact');
    }
    // Store Contact Form data
    public function ContactUsForm(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'email' => 'required|email',
            'sujet' => 'required',
            'message' => 'required'
        ]);
        //  Store data in database
        Contact::create($request->all());
        //  Send mail to admin
        Mail::send('mail', array(
            'email' => $request->get('email'),
            'sujet' => $request->get('sujet'),
            'user_query' => $request->get('message'),
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('uncorrompu@gmail.com')->subject($request->get('sujet'));
        });
        return back()->with('Réeusite', 'Votre message à bien été envoyé.');
    }
}
