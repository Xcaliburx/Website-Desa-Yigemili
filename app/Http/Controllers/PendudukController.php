<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penduduk;

class PendudukController extends Controller
{
    public function index(){
        $penduduks = Penduduk::all();
        return view('penduduk', compact('penduduks'));
    }

    public function create(){
        return view('add_penduduk');
    }

    public function store(Request $request){
        Penduduk::create([
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama,
            'alamat' => $request->alamat,
            'no_kk' => $request->no_kk,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan
        ]);
        return redirect('/penduduk');
    }
}
