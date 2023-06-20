<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Treatment extends Controller
{
    //
    public function TreatmentForm(){
         return view ('medical.treatment-form');
    }
}
