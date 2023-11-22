<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $judul = "Selamat datang siswa";
        $user = Auth::user();
        return view(
            'belakang.dashboard',
            compact('judul', 'user')
        );
    }
}
