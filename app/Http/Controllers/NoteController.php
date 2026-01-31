<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;


class NoteController extends Controller
{
    public function index()
    {
        return view('notes.index', ['notes' => Note::latest()->get()]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['nullable', 'string'],
        ]);
        Note::create($validated);

        return redirect()->back();
    }
}
