@extends('belakang.layouts.main')

@section('isi')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-solid fa-chart-simple"></i> Daftar Tambah Mapel
        </div>
        <div class="card-body">
            <form>
                <div class="form-floating mb-3">
                    <input class="form-control" type="number" placeholder="Masukan Nama Kalian" />
                    <label>Kode Mapel</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" placeholder="Masukan NISN Kalian" />
                    <label>Nama Mapel</label>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button class="btn btn-primary" type="submit"><i class="fa-regular fa-paper-plane"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
