<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtJadwal = Jadwal::all();
        return view ('jadwal.index', compact('dtJadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisis = Divisi::all();

        return view ('jadwal.create', compact('divisis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required',
            'waktu_mulai'  => 'required',
            'waktu_selesai'  => 'required',
        ]);

        Jadwal::create([
            'hari' => $request->hari,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'divisi_id'=>$request->divisi_id,
        ]);

        return redirect('jadwal')->with('toast_success', 'Data Berhasil Disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jadwals = Jadwal::findOrFail($id);
        $divisis = Divisi::all();

        return view('jadwal.edit', compact('jadwals', 'divisis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jadwals = Jadwal::findOrFail($id);
        $jadwals->update($request->all());
        return redirect('jadwal')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jadwals = Jadwal::findOrFail($id);
        $jadwals->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
