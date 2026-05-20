<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::latest()->paginate(10);

        return view('dosen.index', [
            'dosen' => $dosen
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|unique:dosens,nik|max:15',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:dosens,email',
            'notelp' => 'required',
            'prodi' => 'required|string|max:100',
            'alamat' => 'required|string',
        ]);

        Dosen::create($validated);

        return redirect()
            ->route('dosen.index')
            ->with('success', 'Data dosen berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dosen = Dosen::findOrFail($id);

        return view('dosen.show', [
            'dosen' => $dosen
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dosen = Dosen::findOrFail($id);

        return view('dosen.edit', [
            'dosen' => $dosen
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dosen = Dosen::findOrFail($id);

        $validated = $request->validate([
            'nik' => 'required|unique:dosens,nik,' . $dosen->id . '|max:15',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:dosens,email,' . $dosen->id,
            'notelp' => 'required',
            'prodi' => 'required|string|max:100',
            'alamat' => 'required|string',
        ]);
// 
        $dosen->update($validated);

        return redirect()
            ->route('dosen.index')
            ->with('success', 'Data dosen berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Dosen::destroy($id);

        return redirect()
            ->route('dosen.index')
            ->with('success', 'Data dosen berhasil dihapus.');
    }
}