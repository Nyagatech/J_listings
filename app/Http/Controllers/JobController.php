<?php

namespace App\Http\Controllers;

use App\Models\Job; // Model for the Job resource
use App\Http\Requests\StoreJobRequest; // Request validation for storing a job
use App\Http\Requests\UpdateJobRequest; // Request validation for updating a job

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', ['jobs' => Job::all()]); // Pass all jobs to the index view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create'); // Return the view for creating a new job
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        Job::create($request->validated()); // Validate and create the job record
        return redirect()->route('jobs.index')->with('success', 'Job created successfully.'); // Redirect to index with success message
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show', compact('job')); // Pass the specific job to the show view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job')); // Pass the specific job to the edit view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        $job->update($request->validated()); // Validate and update the job record
        return redirect()->route('jobs.index')->with('success', 'Job updated successfully.'); // Redirect to index with success message
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete(); // Delete the job record
        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully.'); // Redirect to index with success message
    }
}
