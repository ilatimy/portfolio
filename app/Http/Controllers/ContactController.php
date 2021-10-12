<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\Contact;
use App\Models\Contact as ModelsContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        //pour créer / afficher le formulaire
        return view('contact/contact');

    }

    public function confirm(ContactRequest $request){ //pour traiter le formulaire
        
        Mail::to('service@indira.fr')
        ->send(new Contact($request->except('_token'))); //demander à request de vérifier tous les champs sauf le token csrf
        
        //Enregistre les messages dans la bdd
        $contact = new ModelsContact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return view('contact/confirm');

    }
}