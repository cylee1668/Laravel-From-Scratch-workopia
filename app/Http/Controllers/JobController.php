<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use phpDocumentor\Reflection\Types\String_;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // $jobs = [
        //     'Web Developer',
        //     'Databse Admin',
        //     'Software Engineer',
        //     'System Analyst',
        //     'Staff',
        // ];

        $jobs = Job::all();

        return view('jobs.index')->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // $title = $request->input('title');
        // $description = $request->input('description');

        // return "title: $title, description: $description";

        // $title = $request->input('title');
        // $description = $request->input('description');
//
        $validateData = $request->validate([
           'title' => 'required|string|max:255',
           'description' => 'required|string',
        ]);

        Job::create([
            'title' => $validateData['title'],
            'description' => $validateData['description'],
        ]);

        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job): view
    {
        return view('jobs.show')->with('job', $job);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }



}
