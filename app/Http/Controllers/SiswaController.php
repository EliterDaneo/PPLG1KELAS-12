<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SiswaController extends Controller
{
    public function index(){
        $judul = "Halaman Data Siswa";
        $user = Auth::user();
        return view('belakang.siswa.index', compact('judul', 'user'));
    }

    public function create(){
        $judul = "Halaman Data Siswa";
        $user = Auth::user();
        return view('belakang.siswa.create', compact('judul', 'user'));
    }
}