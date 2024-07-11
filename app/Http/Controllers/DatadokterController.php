<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DatadokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Dokter::get();
        $title = "Data Dokter";
        return view('datadokter.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('datadokter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Dokter::create([
            'nama_dokter' => $request->nama_dokter,
            'nik_dokter' => $request->nik_dokter,
            'ket_dokter' => $request->ket_dokter,
        ]);
        return redirect()->to('datadokter')->with('message', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Dokter::find($id);
        return view('datadokter.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Dokter::where('id', $id)->update([
            'nama_dokter' => $request->nama_dokter,
            'nik_dokter' => $request->nik_dokter,
            'ket_dokter' => $request->ket_dokter,
        ]);

        toast('Data berhasil di ubah', 'success');
        return redirect()->to('datadokter');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Dokter::where('id', $id)->delete();
        return redirect()->to('datadokter')->with('message', 'Data berhasil dihapus');
    }
}
