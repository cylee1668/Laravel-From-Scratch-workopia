<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/jobs', function () {
//     return view(
//         'jobs.index',
//         [
//             'title' => 'Available Jobs2'
//         ]
//     );
// })->name('jobs');

// Route::get('/jobs', function () {
//     $title = "Available Jobs4";
//     return view('jobs.index')->with('title', $title);
// })->name('jobs');

Route::get('/jobs', function () {
    $title = "Available Jobs6";
    $jobs = [
        'Web Developer1',
        'Database Admin',
        'Software Engineer',
        'System Analyst'
    ];
    return view('jobs.index', compact('title', 'jobs'));
})->name('jobs');

Route::get('jobs/create', function () {
    return view('jobs.create');
})->name('jobs.create');
