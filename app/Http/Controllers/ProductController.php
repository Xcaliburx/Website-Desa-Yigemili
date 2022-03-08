<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function create(){
        return view('add_produk');
    }

    public function store(Request $request){
        $image = $request->file('foto_produk');
        $new_name = $image->getClientOriginalName();
        $image->move(public_path('storage/images'), $new_name);
        Produk::create([
            'foto_produk' => $new_name,
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk
        ]);
        return redirect('/produk');
    }

    public function index(){
        $produks = Produk::all();
        return view('produk', compact('produks'));
    }
}
