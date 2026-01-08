<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosSolutionsController extends Controller
{
    //telephonie entreprise
    public function telephonie_entreprise()
    {
        return view('frontend.sections.solutions.telephonie_entreprise');
    }

    // connectivite
    public function connectivite()
    {
        return view('frontend.sections.solutions.connectivite');
    }

    // interconexion
    public function interconexion()
    {
        return view('frontend.sections.solutions.interconnexion');
    }
}
