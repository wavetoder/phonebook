<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instansi;

class InstansiController extends Controller
{
    public function index()
    {
        $instansi = Instansi::all();
        return view('instansi.index', compact('instansi'));
    }

    public function create()
    {
        return view('instansi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_telp' => 'required',
            'instansi' => 'required'
        ]);

        Instansi::create($request->all());

        return redirect()->route('instansi.index')
            ->with('success', 'Instansi created successfully.');
    }

    public function edit(Instansi $instansi)
    {
        return view('instansi.edit', compact('instansi'));
    }

    public function update(Request $request, Instansi $instansi)
    {
        $request->validate([
            'nama' => 'required',
            'no_telp' => 'required',
            'instansi' => 'required'
        ]);

        $instansi->update($request->all());

        return redirect()->route('instansi.index')
            ->with('success', 'Instansi updated successfully');
    }

    public function destroy(Instansi $instansi)
    {
        $instansi->delete();

        return redirect()->route('instansi.index')
            ->with('success', 'Instansi deleted successfully');
    }
}