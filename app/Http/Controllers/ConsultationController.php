<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index(Request $request){
        
       return back()->withInput();

    }
}
