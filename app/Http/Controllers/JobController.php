<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    // all jobs
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    // single job
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);

    }

    // edit job
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);

    }

    // store job
    public function store()
    {
        // validation......
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        Mail::to($job->employer->user)->queue(new JobPosted($job));

        return redirect('/jobs');
    }

    // create job
    public function create()
    {
        return view('jobs.create');
    }

    // update job
    public function update(Job $job)
    {
        // authorized (On hold...)
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        return redirect('/jobs/' . $job->id);
    }

    // delete job
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
