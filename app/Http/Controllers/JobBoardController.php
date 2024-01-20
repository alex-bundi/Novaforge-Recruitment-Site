<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\JobBoard;
use Illuminate\Http\Request;
use App\Models\PersonalInfo;
use App\Models\ApplicantInfo;

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
            // Store the selected job data in the session
            $request->session()->put('selectedCareersDetails', $selectedCareersDetails);
            return view('jobView')->with('selectedCareersDetails', $selectedCareersDetails );
        }
    }

    public function getJobApplicationForm (Request $request) {
        // Retrieve the selected job data from the session
        $selectedCareer = $request->session()->get('selectedCareersDetails');
        return view('jobApplication')->with('selectedCareer', $selectedCareer);
    }

    public function postUserApplication (Request $request){
        $userData = $request->input('userData');
        session(['application_data' => $userData]);

        return response()->json(['success']);

    }

    public function showProcessedData() {
        $processedData = session('application_data');

        $rules = [
            $processedData[0]["firstName"] => 'bail|required|string',
            $processedData[0]["lastName"] => 'required|string',
            $processedData[0]["dateBirth"] => 'required|string',
            $processedData[0]["email"] => 'required|email|unique:App\Models\PersonalInfo,email',
            $processedData[0]["secondName"] => 'string',
            $processedData[0]["phoneNo"] => 'string',
            $processedData[1]["jobTitle"] => 'required|string',
            $processedData[1]["company"] => 'required|string',
            $processedData[1]["duration"] => 'integer',
            $processedData[1]["isCurrent"] => 'integer',
            $processedData[1]["reponsibilities"] => 'string',
            // $processedData[2]["schoolType"] => 'required|string',
            // $processedData[2]["schoolName"] => 'required|string',
            // $processedData[2]["uploadedFile"] => 'required|string',
            // $processedData[2]["schoolAddress"] => 'string',
            // $processedData[2]["schoolCity"] => 'string',
            // $processedData[2]["noYears"] => 'integer',
        ];

        $validator = Validator::make($processedData, $rules);
        dd($validator->validated());


    }
    
}
