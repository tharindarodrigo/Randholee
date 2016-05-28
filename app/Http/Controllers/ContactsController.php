<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;

class ContactsController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return view('control-panel.contact', compact('contact'));
    }

    public function store(Request $request)
    {

        try{
            $contact = Contact::findOrFail(1);
        }catch(ModelNotFoundException $e){
            $contact = new Contact();
        }

        $contact->tel = $request->get('tel');
        $contact->fax = $request->get('fax');
        $contact->email = $request->get('email');
        $contact->Address = $request->get('address');
        $contact->longitude = $request->get('longitude');
        $contact->latitude = $request->get('latitude');

        $contact->save();

        return $this->index();

    }
}
