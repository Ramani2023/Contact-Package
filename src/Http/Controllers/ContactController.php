<?php

namespace Ramani\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ramani\Contact\Models\Contect;
use Illuminate\Support\Facades\Mail;
use Ramani\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }
    public function send(Request $request){

        Mail::to(config('contact.sent_email_to'))->send(new ContactMailable($request->message,$request->name));
       Contect::create($request->all());
       return redirect(route('contact'));
    }
}
