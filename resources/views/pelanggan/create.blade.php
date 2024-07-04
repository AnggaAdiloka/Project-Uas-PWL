@extends('layouts.main')

@section('content')
<h1 class="mt-4">Pelanggan</h1>
<ol class="mb-4 breadcrumb">
    <li class="breadcrumb-item active">Tambah Pelanggan</li>
</ol>
<a href="{{ route('pelanggan.index') }}" class="btn btn-secondary mb-3">Kembali</a>
<form action="{{ route('pelanggan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="number" class="form-control" id="nik" name="nik" required>
    </div>
    <div class="mb-3">
        <label for="ktp" class="form-label">Nomer Telp</label>
        <input type="number" class="form-control" id="notelp" name="notelp" required>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" required></textarea>
    </div>
    <div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection