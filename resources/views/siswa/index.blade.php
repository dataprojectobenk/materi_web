@extends('layout')

@section('konten')
    <div class="card">
        <div class="card-header d-flex justify-items-center justify-content-between">
            <span class="card-title h5">Data siswa</span>
            <a href="" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-sm table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>NO TELP</th>
                        <th>TANGGAL LAHIR</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection