<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        return view('layanan.index', compact('layanan'));
    }

    public function create()
    {
        return view('layanan.create'); 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_layanan' => 'required|string|max:255',
            'nama_layanan' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        Layanan::create($validatedData);

        return redirect()->route('layanan.index')->with('success', 'Layanan created successfully.');
    }

    public function show(Layanan $layanan)
    {
        return view('layanan.show', compact('layanan'));
    }

    public function edit(Layanan $layanan)
    {
        return view('layanan.edit', compact('layanan'));
    }

    public function update(Request $request, $id)
    {
        $layanan = Layanan::findOrFail($id);

        $request->validate([
            'jenis_layanan' => 'required|string|max:255',
            'nama_layanan' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        $layanan->update($request->all());

        return redirect()->route('layanan.index')->with('success', 'Layanan updated successfully.');
    }

    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);

        $layanan->delete();

        return redirect()->route('layanan.index')->with('success', 'Layanan deleted successfully.');
    }
}
