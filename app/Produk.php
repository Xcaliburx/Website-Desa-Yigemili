<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['foto_produk', 'nama_produk', 'deskripsi_produk'];
}
