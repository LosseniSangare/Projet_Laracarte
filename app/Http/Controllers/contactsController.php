<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class contactsController extends Controller
{


    public function create(){
      return view('pages.contact');
    }


    public function store(ContactRequest $request){

    }



}
