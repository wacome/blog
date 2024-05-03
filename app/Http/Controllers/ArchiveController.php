<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function index()
    {
        $archives = Archive::all();
        return view('archives.index', compact('archives'));
    }

    public function show(Archive $archive)
    {
        return view('archives.show', compact('archive'));
    }

    public function create()
    {
        return view('archives.create');
    }

    public function store(Request $request)
    {
        $archive = Archive::create($request->all());
        return redirect()->route('archives.index');
    }

    public function edit(Archive $archive)
    {
        return view('archives.edit', compact('archive'));
    }

    public function update(Request $request, Archive $archive)
    {
        $archive->update($request->all());
        return redirect()->route('archives.index');
    }

    public function destroy(Archive $archive)
    {
        $archive->delete();
        return redirect()->route('archives.index');
    }
}
