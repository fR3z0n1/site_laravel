<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactPost;
use App\Models\Contact;

class ContactController extends Controller
{
    public function sendForm(ContactPost $req) {

        $contact = new Contact();
        $contact->name = $req->contact_name;
        $contact->email = $req->contact_email;
        $contact->message = $req->contact_message;
        $contact->save();

        return redirect()->route('gallery-page')->with('success', 'Ваше обращение успешно отправлено');
    }
}
