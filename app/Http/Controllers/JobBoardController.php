<?php

namespace App\Http\Controllers;

use App\Models\JobBoard;
use Illuminate\Http\Request;

class JobBoardController extends Controller
{
    private $job_details;
    public function getAvailableJobs() {
        $availableJobs =  JobBoard::where('is_available', 1)->get();
        $this->job_details = [];
        foreach ($availableJobs as $values){
            $this->job_details[] = [
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
        return response()->json(['message' => $this->job_details]);
    }

    public function jobDisplay (Request $request) {
        $data = json_decode($request->collect());
        $selectedJob =  JobBoard::where('job_title', $data->selected_career)->get(['job_title', 'job_description', 'location', 
                                                                                'Salary', 'positions', 'job_reference_code', 'posted_date']);

        foreach ( $selectedJob as $values){
            $selectedCareersDetails = [
                'job_title'=>$values->job_title, 
                'job_description'=>$values->job_description, 
                'location'=>$values->location, 
                'Salary'=>$values->Salary, 
                'positions'=>$values->positions, 
                'job_reference_code'=>$values->job_reference_code, 
                'posted_date'=>$values->posted_date
            ];
            return view('jobView')->with('selectedCareersDetails', $selectedCareersDetails );
        }
    }

    public function getJobApplicationForm (Request $request) {
        $this->getAvailableJobs();
        print_r($this->job_details);
        
    }
    
}
