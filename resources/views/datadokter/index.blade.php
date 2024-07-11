@extends('layouts.app')
@section('title', 'Data Dokter')
@section('titlecate','Dokter')
@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('datadokter.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>NIK Dokter</th>
                    <th>Spesialisasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $key => $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nama_dokter }}</td>
                        <td>{{ $d->nik_dokter }}</td>
                        <td>{{ $d->ket_dokter }}</td>
                        <td>
                            <a href="{{ route('datadokter.edit', $d->id) }}" class="btn btn-xs btn-success">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('datadokter.destroy', $d->id) }}" method="post" class="d-inline">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-xs btn-danger show_confirm" type="submit">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
