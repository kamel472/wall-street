<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;

class ContactUsFormController extends Controller
{
    
    public function createForm(Request $request) {
        return view('contact');
      }
  
      
      public function ContactUsForm(Request $request) {

          $name = $request->name;
          $email= $request->email;
          $content= $request->message;

          Mail::send('mail', ['name' => $name, 'content' => $content]
          , function($message) use ($request){
            $message->from($request->email);
            $message->to('eng_kamel2009@ymail.com', 'Admin')->subject('Inquiry From  '.$request->name);
        });

          return back()->with('success', 'We have received your message.');
      }
}
