<?php

namespace App\Http\Controllers\frontend;
use App\Models\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //index
    public function index()
    {
        return view('frontend.index');
    }

    // contact
    public function contact()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {

   
        // 1. Validation
        $validated = $request->validate([
            'nom'        => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'contact'    => 'nullable|string|max:50',
            'entreprise' => 'nullable|string|max:255',
            'message'    => 'required|string|min:10',
            'heure'      => 'required|numeric',
            'captcha_expected' => 'required'
        ]);

        // 2. Vérification du Captcha
        if ($request->heure !== $request->captcha_expected) {
            return back()->withErrors(['heure' => 'Code de sécurité incorrect.'])->withInput();
        }

        // 3. Sauvegarde en base de données
        Contact::create([
            'nom'        => $validated['nom'],
            'email'      => $validated['email'],
            'contact'    => $validated['contact'],
            'entreprise' => $validated['entreprise'],
            'message'    => $validated['message'],
        ]);

        return back()->with('success', 'Votre message a été enregistré. Notre équipe vous recontactera bientôt.');
    }
}
