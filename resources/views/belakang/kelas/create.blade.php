@extends('belakang.layouts.main')

@section('isi')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-solid fa-chart-simple"></i> Daftar Tambah Kelas
        </div>
        <div class="card-body">
            <form action="{{ route('prosesDataKelasCreate') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input class="form-control @error('kode_kelas') is-invalid @enderror" type="number" name="kode_kelas"
                        placeholder="Masukan kode kelas" />
                    <label>Kode Kelas</label>
                    @error('kode_kelas')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control @error('nama_kelas') is-invalid @enderror" type="text" name="nama_kelas"
                        placeholder="Masukan Nama kelas" />
                    <label>Nama Kelas</label>
                    @error('nama_kelas')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-flex align-items-end justify-content-end mt-4 mb-0">
                    <button class="btn btn-primary" type="submit"><i class="fa-regular fa-paper-plane"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
