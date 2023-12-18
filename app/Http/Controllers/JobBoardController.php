<?php

namespace App\Http\Controllers;

use App\Models\JobBoard;
use Illuminate\Http\Request;

class JobBoardController extends Controller
{
    public function getSearchQuery (Request $request ) {
        $searchQuery = $request->input('jobs_search');
        echo($searchQuery);

    }
}
