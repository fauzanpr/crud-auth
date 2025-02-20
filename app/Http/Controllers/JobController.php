<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();

        // INSERT INTO jobs (company, salary, position) VALUES (
        //     "kampeni", 100000, "Posisi"
        // );
        return view("job", compact("jobs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create-job");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Job::create([
            "company" => $request->company,
            "position" => $request->position,
            "salary" => $request->salary
        ]);
        return redirect()->route("job.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
