<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $title = "Available Jobs7";
        $jobs = [
            'Web Developer1',
            'Database Admin2',
            'Software Engineer',
            'System Analyst'
        ];

        return view('jobs.index', compact('title', 'jobs'));
    }


    public function create()
    {
        return view('jobs.create');
    }
}
