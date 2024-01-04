<?php

namespace App\Http\Controllers;

use App\Models\JobBoard;
use Illuminate\Http\Request;

class JobBoardController extends Controller
{
    // public function getSearchQuery (Request $request ) {

    //     $validate = $request->validate([
    //         'searchInput' => 'bail|required|string|max:50'
    //     ]);
    //     $jobSearch = $validate['searchInput'];
    //     $searchQuery = ucwords(trim($jobSearch));// Sanitize value
    //     $query = JobBoard::where('job_title', $searchQuery)->get(); // Query database

    //     if ($query->isEmpty()){ // If Input value does not exist in the database
    //         $notFoundMessage = 'The search did not yield any results for that specific job.';
    //         return response()->json(['message' => $notFoundMessage]);
    //     }else {
    //         // Data to be sent
    //         $job_details = [
    //             'job_title' => '',
    //             'job_description' => '',
    //             'location' => '',
    //             'Salary' => '',
    //             'positions' => '',
    //             'job_reference_code' => '',
    //             'posted_date' => ''
    //         ];
    //         foreach ($query as $values){
    //             if ($values->is_available === 1) {// Get only specific records.
    //                 $job_details['job_title'] = $values->job_title;
    //                 $job_details['job_description'] = $values->job_description;
    //                 $job_details['location'] = $values->location;
    //                 $job_details['Salary'] = $values->Salary;
    //                 $job_details['positions'] = $values->positions;
    //                 $job_details['job_reference_code'] = $values->job_reference_code;
    //                 $job_details['posted_date'] = $values->posted_date;
    //             }
    //         }
    //         return response()->json(['message' => $job_details]);
    //     }
    // }

    public function getAvailableJobs() {
        $availableJobs =  JobBoard::where('is_available', 1)->get();
        $job_details = [];
        foreach ($availableJobs as $values){
            $job_details[] = [
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
