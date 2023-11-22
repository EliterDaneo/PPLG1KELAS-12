<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function index()
    {
        $judul = "Halaman Data Guru";
        $user = Auth::user();
        return view('belakang.guru.index', compact('judul', 'user'));
    }

    public function create()
    {
        $judul = "Halaman Data Guru";
        $user = Auth::user();
        return view('belakang.guru.create', compact('judul', 'user'));
    }
}
