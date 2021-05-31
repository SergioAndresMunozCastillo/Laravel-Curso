<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function show(){
      return view('contact');
    }

    public function store(){

      request()->validate(['email' => 'required|email']);
      //$email = request('email');

      Mail::to(request('email'))->send(new ContactMe());
/*
      Mail::raw('Funciona!!', function ($message){
        $message->to(request('email'))->subject('Hola por ahí!');
      });
*/
      return redirect('/contact')->with('message', 'Email sent!');
    }
}
