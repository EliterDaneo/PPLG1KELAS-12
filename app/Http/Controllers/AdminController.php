<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $judul = "Selamat datang admin";
        $user = Auth::user();
        return view('belakang.dashboard',
        compact('judul', 'user'));
    }
}