<?php

namespace App\Http\Controllers;

use App\Models\JobBoard;
use Illuminate\Http\Request;

class JobBoardController extends Controller
{
    public function getSearchQuery (Request $request ) {
        
        $validate = $request->validate([
            'jobs_search' => 'bail|required|string|max:50'
        ]);

        $searchQuery = ucwords(trim($request->input('jobs_search'))); // Sanitize value
        $query = JobBoard::where('job_title', $searchQuery)->get();
        
        if ($query->isEmpty()){
            $jobNotFoundMessage = 'The search did not yield any results for that specific job.';
            
            return view('jobBoard', ['jobNotFoundMessage' => $jobNotFoundMessage]);
                              
        }else {
            // Data to be displayed in the view
            $job_details = [
                'job_title' => '',
                'job_description' => '',
                'location' => '',
                'Salary' => '',
                'positions' => '',
                'job_reference_code' => '',
                'posted_date' => ''
            ];

            foreach ($query as $values){
                if ($values->is_available === 1) {// Get only specific records.
                    $job_details['job_title'] = $values->job_title;
                    $job_details['job_description'] = $values->job_description;
                    $job_details['location'] = $values->location;
                    $job_details['Salary'] = $values->Salary;
                    $job_details['positions'] = $values->positions;
                    $job_details['job_reference_code'] = $values->job_reference_code;
                    $job_details['posted_date'] = $values->posted_date;
                    // echo($values->job_reference_code);
                }
            }
            return view('jobBoard', compact('job_details'));
        }
    }
}
