<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    //
    public function TreatmentForm(){
        return view('medical.treatment-form');
    }
}
