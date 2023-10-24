<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function dashboard()
    {
        $petugas = Auth::user();
        return view('pages/dashboard', compact('petugas'));
    }
}
