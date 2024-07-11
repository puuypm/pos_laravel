@extends('layouts.app')
@section('title', 'Tambah Kategori')
@section('content')
<form action="{{route('category.store')}}" method="post">
    @csrf
    <div class="form-group mb-3">
        <label for="">Tambah Kategori</label>
        <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Kategori">
    </div>
    <div class="form-group mb-3">
        <input type="submit" class="btn btn-primary" value="Simpan">
        <input type="reset" class="btn btn-danger" value="Batal">
        <a href="{{url()->previous()}}" class="btn btn-blue btn-info">Kembali</a>
    </div>
</form>
@endsection
