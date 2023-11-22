<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
    public function index()
    {
        $judul = "Halaman Data Kelas";
        $kelas = Kelas::all();
        $user = Auth::user();
        return view('belakang.kelas.index', compact('judul', 'kelas', 'user'));
    }

    public function create()
    {
        $judul = "Halaman Tambah Kelas";
        $user = Auth::user();
        return view('belakang.kelas.create', compact('judul', 'user'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_kelas' => 'required',
            'nama_kelas' => 'required|min:5',
        ]);

        Kelas::create([
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas
        ]);

        Alert::success('Selamat!!', 'Data Berhasil Disimpan');

        return redirect()->route('dataKelas')->with(['success' => 'Data Berhasil disimpan']);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kode_kelas' => 'required',
            'nama_kelas' => 'required|min:5',
        ]);

        $kelas = Kelas::findOrFail($id);

        $kelas->update([
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas
        ]);

        Alert::info('Selamat!!', 'Data Berhasil Diupdate');

        return redirect()->route('dataKelas')->with(['success' => 'Data Berhasil disimpan']);
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        Alert::error('Selamat!!', 'Data Berhasil Dihapus!');
        return redirect()->route('dataKelas')->with(['success' => 'Data Berhasil disimpan']);
    }
}