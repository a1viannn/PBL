<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtDivisi = Divisi::all();
        return view('divisi.index', compact('dtDivisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('divisi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'nama' => 'required'
        ]);

        Divisi::create([
            'nama' => $request->nama,
        ]);

        return redirect('divisi')->with('toast_success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $divisis = Divisi::findOrFail($id);
        return view('divisi.edit', compact('divisis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $divisis = Divisi::findOrFail($id);
        $divisis->update($request->all());
        return redirect('divisi')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $divisis = Divisi::findOrFail($id);
        $divisis->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus');
    }
}
