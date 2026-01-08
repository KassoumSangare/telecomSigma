<?php

namespace App\Http\Controllers\frotend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    //conseil_personnalise
    public function conseil_personnalise(){
        return view('frontend.sections.services.conseil_personnalise');
    }

    //installation_maintenance
    public function installation_maintenance(){
        return view('frontend.sections.services.installation_maintenance');
    }

    //reseau
    public function reseau(){
        return view('frontend.sections.services.reseau');
    }
}