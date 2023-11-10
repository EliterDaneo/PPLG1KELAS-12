<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $judul = "Halaman Data Jurusan";
        return view('belakang.jurusan.index', compact('judul'));
    }
}