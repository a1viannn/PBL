<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ukm.main');
    }
}
