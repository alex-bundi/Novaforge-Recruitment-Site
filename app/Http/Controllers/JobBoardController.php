<?php

namespace App\Http\Controllers;

use App\Models\JobBoard;
use Illuminate\Http\Request;

class JobBoardController extends Controller
{

    public function getAvailableJobs() {
        $availableJobs =  JobBoard::where('is_available', 1)->get();
        $job_details = [];
        foreach ($availableJobs as $values){
            $job_details[] = [
                'job_ID' =>  $values->job_ID,
                'job_title' => $values->job_title,
                'job_description' => $values->job_description,
                'location' => $values->location,
                'Salary' => $values->Salary,
                'positions' => $values->positions,
                'job_reference_code' => $values->job_reference_code,
                'posted_date' => $values->posted_date
            ];
        }
        return response()->json(['message' => $job_details]);
    }

    
}
