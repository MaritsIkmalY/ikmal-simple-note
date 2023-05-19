<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();

        return view('note.index', compact('notes'));
    }

    public function create()
    {
        return view('note.create');
    }

    public function store(NoteRequest $request)
    {
        $requestValidated = $request->validated();
        Note::create($requestValidated);

        return redirect()->route('note.index')->with('success', 'Note berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $note = Note::find($id);

        return view('note.edit', compact('note'));
    }

    public function update(NoteRequest $request, string $id)
    {
        $requestValidated = $request->validated();
        Note::find($id)->update($requestValidated);

        return redirect()->route('note.index')->with('success', 'Note berhasil diupdate');
    }

    public function destroy(string $id)
    {
        $note = Note::find($id);
        $note->delete();

        return redirect()->route('note.index')->with('danger', 'Note berhasil dihapus');
    }
}
