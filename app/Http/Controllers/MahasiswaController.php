<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa=Mahasiswa::latest()-> paginate(5);
        return view('mhs.index', compact('mahasiswa')) -> with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('mhs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'Gender' => 'required',
            'Usia' => 'required',
            'Alamat' => 'required'
        ]);
        Mahasiswa::create($request->all());
        return redirect()->route('mhs.index') ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswas = Mahasiswa::find($id);
        return view('mhs.detail', compact('mahasiswas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswas = Mahasiswa::find($id);
        return view('mhs.edit', compact('mahasiswas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama'=> 'required',
            'Gender'=> 'required',
            'Usia'=> 'required',
            'Alamat'=> 'required'
        ]);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->Nama = $request->get('Nama');
        $mahasiswa->Gender = $request->get('Gender');
        $mahasiswa->Usia = $request->get('Usia');
        $mahasiswa->Alamat = $request->get('Alamat');
        $mahasiswa->save();
        return redirect()->route('mhs.index')-> with('success', 'Data Berhasil diedit..!php');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswas = Mahasiswa::find($id);
        $mahasiswas -> delete();
        return redirect()->route('mhs.index') -> with ('success', 'Data Berhasil Dihapus');
    }
}
