<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyedia;

class PenyediaController extends Controller
{
    public function index()
    {
        $penyedia = Penyedia::all();
        return view('penyedia.index', compact('penyedia'));
    }

    public function create()
    {
        return view('penyedia.create');  // Jika Anda memiliki halaman untuk form input baru
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

        Penyedia::create($validatedData);

        return redirect()->route('penyedia.index')->with('success', 'Penyedia created successfully.');
    }

    public function show(Penyedia $penyedia)
    {
        return view('penyedia.show', compact('penyedia'));
    }

    public function edit(Penyedia $penyedia)
    {
        return view('penyedia.edit', compact('penyedia'));  // Menampilkan form edit
    }

    public function update(Request $request, $id)
    {
        $penyedia = Penyedia::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|string|in:l,p',
            'usia' => 'required|integer|min:1',
            'kontak' => 'required|string|min:1',
            'deskripsi' => 'nullable|string',
        ]);

        $penyedia->update($request->all());

        return redirect()->route('penyedia.index')->with('success', 'Penyedia updated successfully.');
    }
    

    public function destroy($id)
    {
        $penyedia = Penyedia::findOrFail($id);

        $penyedia->delete();

        return redirect()->route('penyedia.index')->with('success', 'Penyedia deleted successfully.');
    }


}
