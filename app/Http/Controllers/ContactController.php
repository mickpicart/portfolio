<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function contact(){
        return view('contact/contact');
    }

    public function confirm(ContactRequest $request){
        Mail::to('administrateur@gmail.com')
            ->send(new Contact($request->except('token')));
        return view('contact/confirm');
    }
}
