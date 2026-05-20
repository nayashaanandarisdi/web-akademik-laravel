@extends('layouts.main')

@section('title', 'Detail Dosen')

@section('content')

<div class="container mt-4">

    <div class="card shadow-lg border-0 rounded-4">

        {{-- Header --}}
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detail Data Dosen</h4>
        </div>

        {{-- Body --}}
        <div class="card-body">

            <table class="table table-bordered table-striped">

                {{-- NIK --}}
                <tr>
                    <th width="250">NIK</th>
                    <td>{{ $dosen->nik }}</td>
                </tr>

                {{-- Nama --}}
                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $dosen->nama }}</td>
                </tr>

                {{-- Email --}}
                <tr>
                    <th>Email</th>
                    <td>{{ $dosen->email }}</td>
                </tr>

                {{-- Nomor Telepon --}}
                <tr>
                    <th>Nomor Telepon</th>
                    <td>{{ $dosen->notelp }}</td>
                </tr>

                {{-- Program Studi --}}
                <tr>
                    <th>Program Studi</th>
                    <td>{{ $dosen->prodi }}</td>
                </tr>

                {{-- Alamat --}}
                <tr>
                    <th>Alamat</th>
                    <td>{{ $dosen->alamat }}</td>
                </tr>

            </table>

            {{-- Tombol --}}
            <a href="{{ route('dosen.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>

        </div>

    </div>

</div>

@endsection