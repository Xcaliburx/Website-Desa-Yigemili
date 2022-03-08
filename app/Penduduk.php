<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $fillable = ['nik', 'nama_lengkap', 'alamat', 'no_kk', 'jenis_kelamin', 'tanggal_lahir','tempat_lahir', 'agama', 'pekerjaan', 'pendidikan'];
}
