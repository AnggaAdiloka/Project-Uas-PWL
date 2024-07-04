@extends('layouts.main')

@section('content')
<h1 class="mt-4">Pelanggan</h1>
<ol class="mb-4 breadcrumb">
    <li class="breadcrumb-item active">Daftar Pelanggan</li>
</ol>
<a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>
<div class="row">
    <div class="col">
        <div class="input-group mb-3">
            <input type="text" value="{{ Request::input('search') }}" class="form-control" placeholder="search . . ." name="search">
        </div>
    </div>
    <div class="col-1">
    <button class="btn btn-outline-primary" type="submit">Search</button>
    </div>
</div> 
<table class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIK</th>
            <th>Nomer Telp</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($details as $detail)
        <tr>
            <td>{{ $detail->name }}</td>
            <td>{{ $detail->nik }}</td>
            <td>{{ $detail->notelp}}</td>
            <td>{{ $detail->alamat }}</td>
            <td>
                <a href="{{ route('pelanggan.edit', $detail->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('pelanggan.destroy', $detail->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus data pelanggan ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
