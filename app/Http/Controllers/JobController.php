<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Exception;
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
        try {
            $data_validated = $request->validate([
                "company" => "required",
                "position" => "required",
                "salary" => "required|numeric"
            ]);
            Job::create($data_validated);
    
            return redirect()->route("job.index")->with("success", "Loker berhasil disimpan");
        } catch(Exception $e) {
            return redirect()->route("job.index")->with("error", "Proses Insert Gagal");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = Job::findOrFail($id);
        return view("detail", compact("job"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $job = Job::findOrFail($id);

        return view("edit-job", compact("job"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $job = Job::findOrFail($id);
        $job->update([
            "company" => $request->company,
            "position" => $request->position,
            "salary" => $request->salary
        ]);

        return redirect()->route("job.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route("job.index");
    }
}
