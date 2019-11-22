<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Requests\ContactRequest;
use  App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;

class contactsController extends Controller
{


    public function create(){
      return view('pages.contact');
    }


    public function store(ContactRequest $request){
      $message = Message:: create($request->only('nom','email','message'));
      $mailable = new ContactMessageCreated($message);
      Mail::to('loss.sangare24@gmail.com')->send($mailable);
      flashy()->success('message envoyé avec succès');
      return redirect()->route('home_path');
    }



}
