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

    public function getViewJob ($id) {
        $selectedJob =  JobBoard::find($id);
        return view('jobView')->with('selectedJob', $selectedJob);
    }
}
