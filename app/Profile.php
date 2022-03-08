<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['visi', 'misi', 'gambaran_umum', 'sejarah'];
}
