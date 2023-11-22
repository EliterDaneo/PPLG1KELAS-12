<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MapelController extends Controller
{
    public function index()
    {
        $judul = "Halaman Data Mapel";
        $user = Auth::user();
        return view('belakang.mapel.index', compact('judul', 'user'));
    }

    public function create()
    {
        $judul = "Halaman Data Mapel";
        $user = Auth::user();
        return view('belakang.mapel.create', compact('judul', 'user'));
    }
}
