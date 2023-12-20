<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $dtaPendaftaran = Pendaftaran::all();
        return view ('pendaftaran.index', compact('dtaPendaftaran'));
    }

    public function detail($id)
    {
        $detail = Pendaftaran::where('id', $id)->first();
        return view('pendaftaran.detail', compact('detail'));
    }
}
