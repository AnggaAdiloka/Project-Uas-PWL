@extends('layouts.main')

@section('content')
<h1 class="mt-4">Profile</h1>
<ol class="mb-4 breadcrumb">
    <li class="breadcrumb-item active">Edit Profile {{ $user->name }}</li>
</ol>
<form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf()
    @method('PUT')
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}">
    @error('name')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email', $user->email) }}">
    @error('email')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Gambar</label>
    @if($user->image)
      <img src="{{ asset('storage/' . $user->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" alt=""> 
    @else
      <img src="" class="img-preview img-fluid mb-3 col-sm-5" alt="">
    @endif
    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
    @error('image') 
    <div class="invalid-feedback">
      {{ $message }}
    </div>
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