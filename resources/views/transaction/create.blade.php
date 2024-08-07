@extends('layouts.main')

@section('content')
<h1 class="mt-4">Transaksi</h1>
<ol class="mb-4 breadcrumb">
    <li class="breadcrumb-item active">Tambah Transaksi</li>
</ol>
<a href="{{ route('transaction.index') }}" class="btn btn-secondary mb-3">Kembali</a>
<form action="{{ route('transaction.store') }}" method="POST" enctype="multipart/form-data">
    @csrf()
  <div class="mb-3">
    <label for="userdetail_id" class="form-label">Pilih Pelanggan</label>
    <select class="form-select" id="userdetail_id" name="userdetail_id">
    @foreach($userdetails as $userdetail)
    <option {{ (old('userdetail_id') == $userdetail->id ? 'selected' : '') }} value="{{ $userdetail->id }}">{{ $userdetail->name }}</option>
    @endforeach
    </select>
    @error('userdetail_id')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Pilih Mobil</label>
    <select class="form-select" id="status" name="car_id">
    @foreach($cars as $car)
    <option {{ (old('car_id') == $car->id ? 'selected' : '') }} value="{{ $car->id }}">{{ $car->name }} / {{$car->plat}}</option>
    @endforeach
    </select>
    @error('car_id')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="date_end" class="form-label">Tanggal Pinjam</label>
    <input type="date" class="form-control @error('date_end') is-invalid @enderror" name="date_start" id="date_start" value="{{ old('date_start') }}">
    @error('date_start')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="date_end" class="form-label">Tanggal Kembali</label>
    <input type="date" class="form-control @error('date_end') is-invalid @enderror" name="date_end" id="date_end" value="{{ old('date_end') }}">
    @error('date_end')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="note" class="form-label">Note</label>
    <textarea name="note" id="note" class="form-control @error('note') @enderror">{{ old('note') }}</textarea>
    @error('note')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  <div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

<script>
  function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);
    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection