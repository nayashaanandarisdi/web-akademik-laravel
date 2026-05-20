@extends('layouts.main')

@section('title', 'Detail Mahasiswa')

@section('content')

<div class="container mt-4">

    <div class="card shadow-lg border-0 rounded-4">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detail Data Mahasiswa</h4>
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>
                    <th width="250">NIM</th>
                    <td>{{ $mahasiswa->nim }}</td>
                </tr>

                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $mahasiswa->nama_lengkap }}</td>
                </tr>

                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{ $mahasiswa->tempat_lahir }}</td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $mahasiswa->tgl_lahir }}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{ $mahasiswa->email }}</td>
                </tr>

                <tr>
                    <th>Program Studi</th>
                    <td>{{ $mahasiswa->prodi }}</td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>{{ $mahasiswa->alamat }}</td>
                </tr>

            </table>

            <a href="{{ route('mahasiswa.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>

        </div>

    </div>

</div>

@endsection