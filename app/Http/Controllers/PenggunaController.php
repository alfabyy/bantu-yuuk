<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('pengguna.index', compact('pengguna'));
    }

    public function create()
    {
        return view('pengguna.create'); 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|string|in:l,p',
            'usia' => 'required|integer|min:1',
            'kontak' => 'required|string|min:1',
            'deskripsi' => 'nullable|string',
        ]);

        Pengguna::create($validatedData);

        return redirect()->route('pengguna.index')->with('success', 'pengguna created successfully.');
    }

    public function show(Pengguna $pengguna)
    {
        return view('pengguna.show', compact('pengguna'));
    }

    public function edit(Pengguna $pengguna)
    {
        return view('pengguna.edit', compact('pengguna'));
    }

    public function update(Request $request, $id)
    {
        $pengguna = Pengguna::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|string|in:l,p',
            'usia' => 'required|integer|min:1',
            'kontak' => 'required|string|min:1',
            'deskripsi' => 'nullable|string',
        ]);

        $pengguna->update($request->all());

        return redirect()->route('pengguna.index')->with('success', 'pengguna updated successfully.');
    }
    

    public function destroy($id)
    {
        $pengguna = Pengguna::findOrFail($id);

        $pengguna->delete();

        return redirect()->route('pengguna.index')->with('success', 'pengguna deleted successfully.');
    }


}
