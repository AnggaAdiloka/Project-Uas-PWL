<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;


class PelangganController extends Controller
{
    public function index()
    {
        $details = UserDetail::all();
        return view('pelanggan.index', compact('details'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'nik' => 'required|integer',
            'notelp' => 'required|integer',
            'alamat' => 'required|string'
        ]);

        UserDetail::create($validatedData);
        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil ditambahkan');
    }

    public function show(UserDetail $userDetail)
    {
        return view('pelanggan.show', compact('userDetail'));
    }

    public function edit($id)
    {
        $userDetail = UserDetail::findOrFail($id);
        return view('pelanggan.edit', compact('userDetail'));
    }

    public function update(Request $request, $id)
    {
        $userDetail = UserDetail::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string',
            'nik' => 'required|integer',
            'notelp' => 'required|integer',
            'alamat' => 'required|string'
        ]);

        $userDetail->update($validatedData);
        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $userDetail = UserDetail::findOrFail($id);
        $userDetail->delete();
        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil dihapus');
    }
}