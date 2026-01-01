<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CgbodController
{
    public function index()
    {
        $projects = auth()->user()->cgbodProjects()->get();
        return view('cgbod.index', compact('projects'));
    }

    public function create()
    {
        return view('cgbod.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $project = auth()->user()->cgbodProjects()->create([
            'name' => $request->name
        ]);

        return redirect()->route('cgbod.index')->with('success', 'Your project created!');
    }
}
