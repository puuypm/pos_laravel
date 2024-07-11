@extends('layouts.app')
@section('title', 'Tambah Data Dokter')
@section('titlecate','Dokter')
@section('content')
    <form action="{{ route('datadokter.store') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="">Nama Dokter</label>
            <input type="text" class="form-control" name="nama_dokter" placeholder="Masukkan Nama Dokter">
        </div>
        <div class="form-group mb-3">
            <label for="">NIK Dokter</label>
            <input type="text" class="form-control" name="nik_dokter" placeholder="Masukkan NIK Dokter">
        </div>
        <div class="form-group mb-3">
            <label for="">Spesialisasi</label>
            <input type="text" class="form-control" name="ket_dokter" placeholder="Masukkan Nama Spesialisasi Dokter">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Simpan">
            <input type="reset" class="btn btn-danger" value="Batal">
            <a href="{{ url()->previous() }}" class="btn btn-blue btn-info">Kembali</a>
        </div>
    </form>
@endsection
