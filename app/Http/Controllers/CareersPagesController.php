<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareersPagesController extends Controller
{
    public function getIndex() {
        
        return view('careers');
    }
}
