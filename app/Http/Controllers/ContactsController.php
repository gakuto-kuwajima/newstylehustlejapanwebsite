<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactsController extends Controller
{
    //
    public function index()
    {
      $keywords = '';
      return view('contacts.index',['keywords'=>$keywords]);
    }


    public function confirm(ContactRequest $request)
    {
      $keywords = '';

      $this->validate($request, Contact::$rules);

      $contact = new Contact($request->all());

      return view('contacts.confirm',['keywords'=>$keywords],compact('contact'));
    }

    public function correct(ContactRequest $request)
    {
      $keywords = '';

      $contact = new Contact($request->all());

      return view('contacts.correction',['keywords'=>$keywords],compact('contact'));
    }

    public function complete(ContactRequest $request)
    {
      $keywords = '';

      Contact::create($request->all());

      $request->session()->regenerateToken();

      //送信メール
      \Mail::send(new \App\Mail\Contact([
          'to' => $request->email,
          'to_name' => $request->name,
          'from' => 'info@newstylehustlejapan.com',
          'from_name' => 'NEW STYLE HUSTLE JAPAN',
          'subject' => '【NEW STYLE HUSTLE JAPAN】お問い合わせありがとうございます',
          'mail_subject' => $request->subject,
          'body' => $request->body
      ]));

      \Mail::send(new \App\Mail\Contact([
          'to' => 'info@newstylehustlejapan.com',
          'to_name' => 'NEW STYLE HUSTLE JAPAN WEBSITE',
          'from' => $request->email,
          'from_name' => $request->name,
          'subject' => "$request->name 様からNEW STYLE HUSTLE JAPAN WEBSITEへのお問い合わせ",
          'mail_subject' => $request->subject,
          'body' => $request->body
      ], 'from'));

      return view('contacts.complete',['keywords'=>$keywords]);

    }

}
