<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //contact messages list
    public function contact()
    {
        $data_contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('backend.pages.contact.contact', compact('data_contacts'));
    }
}
