@extends('layouts.app')
@section('title', 'Ubah Data Dokter')
@section('titlecate', 'Dokter')
@section('content')
    <form action="{{ route('datadokter.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="">Edit Nama Dokter</label>
            <input value="{{ $edit->nama_dokter }}" type="text" class="form-control" name="nama_dokter"
                placeholder="Masukkan Nama Dokter">
        </div>
        <div class="form-group mb-3">
            <label for="">Edit NIK Dokter</label>
            <input value="{{ $edit->nik_dokter }}" type="text" class="form-control" name="nik_dokter"
                placeholder="Masukkan NIK Dokter">
        </div>
        <div class="form-group mb-3">
            <label for="">Edit Spesialisasi</label>
            <input value="{{ $edit->ket_dokter }}" type="text" class="form-control" name="ket_dokter"
                placeholder="Masukkan Nama Spesialisasi Dokter">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Simpan">
            <input type="reset" class="btn btn-danger" value="Batal">
            <a href="{{ url()->previous() }}" class="btn btn-blue btn-info">Kembali</a>
        </div>
    </form>
@endsection
