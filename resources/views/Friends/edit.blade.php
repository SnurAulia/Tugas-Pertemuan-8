@extends('layout.app')

@section('title','Friends')
@section('content')
<form action="/friends/{{ $friends['id'] }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') ? old('nama') : $friends['nama'] }}">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nomor Telpon</label>
    <input type="text" class="form-control" name="no_tlp" id="no_tlp" value="{{ old('no_tlp') ? old('no_tlp') : $friends['no_tlp'] }}">
    @error('no_tlp')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat" value="{{ old('alamat') ? old('alamat') : $friends['alamat'] }}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection