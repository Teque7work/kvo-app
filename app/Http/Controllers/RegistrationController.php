<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Registration Controller 
    public function RegistrationForm(){
        return view ('Auth.Registration-Form');
    }
}