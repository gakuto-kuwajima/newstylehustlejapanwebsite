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


    public function complete(ContactRequest $request)
    {
      Caontact::create($request->all());

      $request->session()->regenerateToken();

      return view($contacts.complete);


      //送信メール
      \Mail::send(new \App\Mail\Contact([
          'to' => $request->email,
          'to_name' => $request->name,
          'from' => 'from@example.com',
          'from_name' => 'MySite',
          'subject' => 'お問い合わせありがとうございました。',
          'type' => $request->type,
          'gender' => $request->gender,
          'body' => $request->body
      ]));

      \Mail::send(new \App\Mail\Contact([
          'to' => 'from@example.com',
          'to_name' => 'MySite',
          'from' => $request->email,
          'from_name' => $request->name,
          'subject' => 'サイトからのお問い合わせ',
          'type' => $request->type,
          'gender' => $request->gender,
          'body' => $request->body
      ], 'from'));            

    }

}
