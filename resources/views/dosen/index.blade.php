@extends('layouts.main')

@section('title', 'Daftar Dosen')

@section('content')

<div class="container mt-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        
        <h2>Daftar Dosen Jurusan TI</h2>

        <a href="{{ route('dosen.create') }}"
           class="btn btn-success">
            + Tambah Dosen
        </a>

    </div>

    {{-- Card --}}
    <div class="card shadow-lg border-0 rounded-4">

        <div class="card-body">

            {{-- Alert Success --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Table --}}
            <div class="table-responsive">

                <table class="table table-striped table-hover table-bordered align-middle">

                    {{-- Table Header --}}
                    <thead class="table-primary text-center">

                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Prodi</th>
                            <th>Alamat</th>
                            <th width="220">Action</th>
                        </tr>

                    </thead>

                    {{-- Table Body --}}
                    <tbody>

                        @forelse ($dosen as $item)

                            <tr>

                                {{-- Nomor --}}
                                <td class="text-center">
                                    {{ $loop->iteration + ($dosen->currentPage() - 1) * $dosen->perPage() }}
                                </td>

                                {{-- NIK --}}
                                <td>{{ $item->nik }}</td>

                                {{-- Nama --}}
                                <td>{{ $item->nama }}</td>

                                {{-- Email --}}
                                <td>{{ $item->email }}</td>

                                {{-- Nomor Telepon --}}
                                <td>{{ $item->notelp }}</td>

                                {{-- Prodi --}}
                                <td>{{ $item->prodi }}</td>

                                {{-- Alamat --}}
                                <td>{{ $item->alamat }}</td>

                                {{-- Action --}}
                                <td class="text-center">

                                    {{-- Detail --}}
                                    <a href="{{ route('dosen.show', $item->id) }}"
                                       class="btn btn-info btn-sm me-1">
                                        Detail
                                    </a>

                                    {{-- Edit --}}
                                    <a href="{{ route('dosen.edit', $item->id) }}"
                                       class="btn btn-warning btn-sm me-1">
                                        Edit
                                    </a>

                                    {{-- Hapus --}}
                                    <form action="{{ route('dosen.destroy', $item->id) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Hapus data dosen ini?');">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="8" class="text-center">
                                    Data dosen belum tersedia.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            {{-- Pagination --}}
            <div class="mt-3">
                {{ $dosen->links() }}
            </div>

        </div>

    </div>

</div>

@endsection