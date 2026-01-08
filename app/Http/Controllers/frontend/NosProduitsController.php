<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NosProduitsController extends Controller
{
    //autocom_ip
    public function autocom_ip()
    {
        return view('frontend.sections.produits.autocom_ip');
    }

    // passerelle
    public function passerelle()
    {
        return view('frontend.sections.produits.passerelle');
    }
    // antenne
    public function antenne()
    {
        return view('frontend.sections.produits.antenne');
    }
}
