<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(){
        $judul = "Halaman Data Mapel";
        return view('belakang.mapel.index', compact('judul'));
    }

    public function create(){
        $judul = "Halaman Data Mapel";
        return view('belakang.mapel.create', compact('judul'));
    }
}
