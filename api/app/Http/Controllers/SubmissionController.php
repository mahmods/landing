<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use Illuminate\Http\Request;
use App\Submission;

class SubmissionController extends Controller
{
    public function Index(Request $request)
    {
        $submissions = Submission::all();
        if (count($submissions) > 0) 
        {
            return response()->json(['success' => true, 'submissions' => $submissions]);
        }
        return response()->json(['success' => false, 'error' => 'Empty']);
    }

    public function Submit(Request $request)
    {
        $submission = Submission::create($request->all());
        $submission->fill(['ip'=> $request->ip()]);
        if ($submission) 
        {
            return response()->json(['success' => true, 'id' => $submission->id]);
        }
    }
}
