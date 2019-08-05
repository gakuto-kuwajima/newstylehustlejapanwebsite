<?php

namespace App\Http\Controllers;

use App\Http\Request\ContactRequest;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactsController extends Controller
{
    //
    public function index()
    {
      return view('contacts.index');
    }


    public function confirm(ContactRequest $request)
    {
      $contact = new Contact($request->all());

      return view('contacts.confirm',compact('content'));
    }

}
