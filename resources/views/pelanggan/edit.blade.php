@extends('layouts.main')

@section('content')
<h1 class="mt-4">Pelanggan</h1>
<ol class="mb-4 breadcrumb">
    <li class="breadcrumb-item active">Edit Pelanggan {{ $userDetail->name }}</li>
</ol>
<a href="{{ route('pelanggan.index') }}" class="btn btn-secondary mb-3">Kembali</a>
<form action="{{ route('pelanggan.update', $userDetail->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $userDetail->name }}" required>
    </div>
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="number" class="form-control" id="nik" name="nik" value="{{ $userDetail->nik }}" required>
    </div>
    <div class="mb-3">
        <label for="ktp" class="form-label">Nomer Telp</label>
        <input type="number" class="form-control" id="notelp" name="notelp" value="{{ $userDetail->notelp }}" required>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" required>{{ $userDetail->alamat }}</textarea>
    </div>
    <div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection