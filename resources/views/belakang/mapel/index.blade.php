@extends('belakang.layouts.main')

@section('isi')
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ route('tambahDataMapel') }}" class="btn btn-outline-success"><i class="fas fa-plus me-1"></i> Tambah
                Data</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Mapel</th>
                        <th>Nama Mapel</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>
                            <a href="" title="Edit" class="btn btn-secondary btn-sm"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <a href="" title="Lihat" class="btn btn-primary btn-sm"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="" title="Hapus" class="btn btn-danger btn-sm"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection