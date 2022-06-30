<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsFormController extends Controller
{
    public function createForm(Request $request)
    {
        return view('contact');
    }
    public function ContactUsForm(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'sujet' => 'required',
            'message' => 'required'
        ]);
        //  On stock dans la bdd les données
        Contact::create($request->all());
        //  On envoie le mail à l'admin
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
