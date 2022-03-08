<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Potensi;


class PotensiController extends Controller
{
    public function create(){
        return view('add_potensi');
    }

    public function store(Request $request){
        $image = $request->file('foto_potensi');
        $name = $image->getClientOriginalName();
        $image->move(public_path('storage/images'), $name);
        Potensi::create([
            'foto_potensi' => $name,
            'nama_potensi' => $request->nama_potensi,
            'deskripsi_potensi' => $request->deskripsi_potensi
        ]);
        return redirect('/potensi');
    }

    public function index(){
        $potensis = Potensi::all();
        return view('potensi', compact('potensis'));
    }
}
