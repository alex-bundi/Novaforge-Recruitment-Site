<?php

namespace App\Http\Controllers;
use App\Models\JobBoard;

use Illuminate\Http\Request;

class CareersPagesController extends Controller
{
    public function getIndex() {
        
        return view('careers');
    }

    public function getJobBoard (){
        return view('jobBoard');
    }

    public function getJobApplicationForm () {
        return view('jobApplication');
    }

}
