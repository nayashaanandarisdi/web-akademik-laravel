@extends('layouts.main')

@section('title', 'Edit Mahasiswa')

@section('content')

<div class="container mt-4">

    <div class="card shadow-lg border-0 rounded-4">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit Data Mahasiswa</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                @csrf
                @method('PUT')

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- NIM --}}
                <div class="mb-3">
                    <label class="form-label">NIM</label>

                    <input type="text"
                           name="nim"
                           class="form-control"
                           value="{{ old('nim', $mahasiswa->nim) }}"
                           placeholder="Masukkan NIM"
                           required>
                </div>

                {{-- Nama Lengkap --}}
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>

                    <input type="text"
                           name="nama_lengkap"
                           class="form-control"
                           value="{{ old('nama_lengkap', $mahasiswa->nama_lengkap) }}"
                           placeholder="Masukkan Nama Lengkap"
                           required>
                </div>

                {{-- Tempat Lahir --}}
                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>

                    <input type="text"
                           name="tempat_lahir"
                           class="form-control"
                           value="{{ old('tempat_lahir', $mahasiswa->tempat_lahir) }}"
                           placeholder="Masukkan Tempat Lahir"
                           required>
                </div>

                {{-- Tanggal Lahir --}}
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>

                    <input type="date"
                           name="tgl_lahir"
                           class="form-control"
                           value="{{ old('tgl_lahir', $mahasiswa->tgl_lahir) }}"
                           required>
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label class="form-label">Email</label>

                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ old('email', $mahasiswa->email) }}"
                           placeholder="Masukkan Email"
                           required>

                    @error('email')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Program Studi --}}
                <div class="mb-3">
                    <label class="form-label">Program Studi</label>

                    <select name="prodi"
                            class="form-select"
                            required>

                        <option value="">-- Pilih Prodi --</option>

                        <option value="TRPL" {{ old('prodi', $mahasiswa->prodi) == 'TRPL' ? 'selected' : '' }}>
                            TRPL
                        </option>

                        <option value="MI" {{ old('prodi', $mahasiswa->prodi) == 'MI' ? 'selected' : '' }}>
                            MI
                        </option>

                        <option value="TK" {{ old('prodi', $mahasiswa->prodi) == 'TK' ? 'selected' : '' }}>
                            TK
                        </option>

                        <option value="TEKKOM" {{ old('prodi', $mahasiswa->prodi) == 'TEKKOM' ? 'selected' : '' }}>
                            TEKKOM
                        </option>

                    </select>
                </div>

                {{-- Alamat --}}
                <div class="mb-3">
                    <label class="form-label">Alamat</label>

                    <textarea name="alamat"
                              rows="4"
                              class="form-control"
                              placeholder="Masukkan Alamat"
                              required>{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                </div>

                {{-- Tombol --}}
                <button type="submit" class="btn btn-primary">
                    Perbarui
                </button>

                <a href="{{ route('mahasiswa.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection