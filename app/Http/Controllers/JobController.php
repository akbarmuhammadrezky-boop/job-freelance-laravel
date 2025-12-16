<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;

class JobController extends Controller
{
    // 1. Tampilkan Form Post Job
    public function create()
    {
        return view('post-job'); 
    }

    // 2. Simpan Data ke Database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'company' => 'required',
            'category' => 'required', 
            'description' => 'required',
        ]);

        Job::create([
            'title' => $request->title,
            'company' => $request->company,
            'location' => $request->location,
            'category' => $request->category, 
            'job_type' => $request->job_type,
            'salary' => $request->salary,
            'description' => $request->description,
            'user_id' => Auth::id(), 
        ]);

        return redirect()->route('home')->with('success', 'Pekerjaan berhasil diposting!');
    }

    // 3. Menampilkan List Pekerjaan (Perbaikan: Ditambahkan parameter $category)
    public function indexByCategory($category)
    {
        // Ambil data dari database
        $jobs = Job::where('category', $category)->latest()->get();

        // Kembalikan ke view
        return view('jobs-entry-level', compact('jobs', 'category'));
    }

    // 4. Menampilkan Detail (Perbaikan: Ditambahkan parameter $id)
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.show', compact('job'));
    }
}