@extends('layouts.main')

@section('content')
<h1 class="mt-4">Transaksi</h1>
<ol class="mb-4 breadcrumb">
  <li class="breadcrumb-item active">Detail Transaksi</li>
</ol>
<a href="{{ route('transaction.index') }}" class="btn btn-secondary mb-3">Kembali</a>
<div class="mt-3 justify-content-center">
    <div class="card">
        <div class="card-body">
            <p>Pelanggan : {{ $transaction->userdetail->name }}</p>
            <p>Mobil : {{ $transaction->car->name }} / {{$transaction->car->plat}}</p>
            <p>Tanggal Pinjam : {{ $transaction->date_start }}</p>
            <p>Tanggal Kembali : {{ $transaction->date_end }}</p>
            <p>Status : {{ $transaction->status }}</p>
            <p>Total : {{ $transaction->total }}</p>
            <p>Note : {{ $transaction->note }}</p>
        </div>
    </div>
</div>
@endsection