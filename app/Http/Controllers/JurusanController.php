<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JurusanController extends Controller
{
    public function index()
    {
        $judul = "Halaman Data Jurusan";
        $user = Auth::user();
        return view('belakang.jurusan.index', compact('judul', 'user'));
    }
}