<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class ApplicantController extends Controller
{
    // @desc Store new job applicantion
    // @route POST /jobs/{job}/apply

    public function store(Request $request, Job $job): RedirectResponse {
        // Validate incoming data
        $validatedData = $request->validate ([
            'full_name' => 'required|string',
            'contact_phone' => 'string',
            'contact_email' => 'required|string|email',
            'message' => 'string',
            'location' => 'string',
            'resume' => 'required|file|mimes:pdf|max:2048',

        ]);

        // Handle resume upload
        if($request->hasFile('resume')) {
            $path = $request->file('resume')->store('resume','public');
            $validatedData['resume_path'] = $path;
        }

        // Store the application
        $application = new Applicant($validatedData);
        $application->job_id = $job->id;
        $application->user_id = auth()->id();
        $application->save();

        return redirect()->back()->with('success', 'Your application has been submitted');
    }
}
